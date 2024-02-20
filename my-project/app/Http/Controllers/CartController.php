<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{
    public function add(Request $request){
        $producto = Producto::find($request->id);
        Cart::add(
            $producto->id,
            $producto->nombre,
            1,
            $producto->precio,
            ["image"=>$producto->image]
        );

        return redirect()->route('productos.show', $producto->id)->with("success", "Producto agregado correctamente.");
    }

    public function checkout(Request $request){
        return view('carrito.checkout');
    }

}
