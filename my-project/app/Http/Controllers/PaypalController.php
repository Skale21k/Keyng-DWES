<?php

namespace App\Http\Controllers;

use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use Illuminate\Http\Request;
use PayPal\Api\RedirectUrls;
use PayPal\Auth\OAuthTokenCredential;
use Illuminate\Support\Facades\Config;
use PayPal\Exception\PayPalConnectionException;
use Gloudemans\Shoppingcart\Facades\Cart;

class PaypalController extends Controller
{
    private $apiContext;

    public function __construct(){
        $payPalConfig = Config::get('paypal');

        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                $payPalConfig['client_id'],
                $payPalConfig['secret']
            )
        );
    }

    public function pagoPayPal(Request $request){
        $total = (float)$request->total;

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new Amount();
        $amount->setTotal($total);
        $amount->setCurrency('EUR');

        $transaction = new Transaction();
        $transaction->setAmount($amount);

        $callbackUrl=url("/paypal/status");

        $redirectUrl = new RedirectUrls();
        $redirectUrl->setReturnUrl($callbackUrl)
            ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrl);

        try{
            $payment->create($this->apiContext);
            // echo $payment;

           return redirect()->away($payment->getApprovalLink());
        }
        catch (PayPalConnectionException $ex){
            echo  $ex->getData();
        }

    }

    public function status(Request $request){
        $paymentId = $request->input('paymentId');
        $payerId = $request->input('PayerID');
        $token = $request->input('token');

        if(!$payerId || !$paymentId || !$token){
            $status = "Hubo un error con el pago";
            return redirect('/cart/checkout')->with($status);;
        }

        $payment= Payment::get($paymentId, $this->apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

        //Se ejecuta el pago
        $result = $payment->execute($execution, $this->apiContext);

        if($result->getState() === 'approved'){
            Cart::destroy();
            return redirect("/")->with('success', "Pago realizado correctamente, gracias.");
        }

        $status = "Lo sentimos, no se ha podido realizar el pago";
        return redirect("/checkout");
    }
}
