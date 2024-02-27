<?php

namespace App\Http\Controllers;

use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Payment;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use Illuminate\Http\Request;
use PayPal\Api\RedirectUrls;
use PayPal\Auth\OAuthTokenCredential;
use Illuminate\Support\Facades\Config;
use PayPal\Exception\PayPalConnectionException;

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
        $total = $request->total;

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new Amount();
        $amount->setTotal($total);
        $amount->setCurrency('EUR');

        $transaction = new Transaction();
        $transaction->setAmount($amount);
        $transaction->setDescription('Aquí saldrían los productos pero son un coñazo.');

        $redirectUrl = new RedirectUrls();
        $redirectUrl->setReturnUrl("https://example.com/your_redirect_url.html")
            ->setCancelUrl("https://example.com");

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrl);


        try{
            $payment->create($this->apiContext);
            echo $payment;

            echo "\n\nRedirect user to aproval_url: " . $payment->getApprovalLink() . "\n";
        }
        catch (PayPalConnectionException $ex){
            echo $ex->getData();
        }

    }
}
