<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Redirect;


class CartController extends Controller
{
    public function add(Request $request){
        $producto = Producto::find($request->id);
        if($request->quantity[$producto->id] > $producto->unidades){
            $errors = new MessageBag(['unidades' => ['No existen esas unidades para el producto actualmente, lo sentimos.']]);
            return Redirect::back()->withErrors($errors);
        }
        if(isset($request->quantity[$producto->id])){
            $qty = $request->quantity[$producto->id];
        } else{
            $qty = 1;
        }
        Cart::add([
            'id' => $producto->id,
            'name' => $producto->nombre,
            'price' => $producto->precio,
            'qty' => $qty,
            'options' => ['imagen' => $producto->imagen_url]
        ]);

        return redirect()->back()->with("success", "Producto agregado correctamente.");
    }

    public function checkout(){
        return view('carrito.checkout');
    }

    public function remove(Request $request){
        Cart::remove($request->rowId);
        return redirect()->back()->with("success", "Producto eliminado");
    }

    public function clear(){
        Cart::destroy();
        return redirect()->back()->with("success", "Carrito vaciado");
    }
}
