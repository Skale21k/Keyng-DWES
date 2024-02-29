<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Redirect;


class CartController extends Controller
{
    public function add(Request $request)
    {
        $producto = Producto::find($request->id);

        if (isset($request->quantity[$producto->id])) {
            $qty = $request->quantity[$producto->id];
        } else {
            $qty = 1;
        }

        if ($qty < 1) {
            $errors = new MessageBag(['unidades' => ['La cantidad no puede ser menor a 1.']]);
            return Redirect::back()->withErrors($errors);
        }

        // Busca el producto en el carrito
        $cartItem = Cart::search(function ($cartItem, $rowId) use ($producto) {
            return $cartItem->id === $producto->id;
        })->first();

        // Si el producto ya está en el carrito, obtén su cantidad
        $cantidadCarrito = $cartItem ? $cartItem->qty : 0;

        $cantidadTotal = $cantidadCarrito + $qty;
        if ($cantidadTotal > $producto->unidades) {
            $errors = new MessageBag(['unidades' => ['No existen esas unidades para el producto actualmente, lo sentimos.']]);
            return Redirect::back()->withErrors($errors);
        }

        Cart::add([
            'id' => $producto->id,
            'name' => $producto->nombre,
            'price' => $producto->precio,
            'qty' => $qty,
            'options' => ['imagen' => $producto->imagen_url]
        ]);

        return Redirect::back()->with('message', 'Producto añadido al carrito correctamente.');
    }

    public function checkout()
    {
        return view('carrito.checkout');
    }

    public function remove(Request $request)
    {
        Cart::remove($request->rowId);
        return redirect()->back()->with("success", "Producto eliminado");
    }

    public function clear()
    {
        Cart::destroy();
        return redirect()->back()->with("success", "Carrito vaciado");
    }
}
