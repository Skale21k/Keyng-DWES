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
