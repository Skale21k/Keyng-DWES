<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{
    public function add(Request $request){
        $producto = Producto::find($request->id);
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
