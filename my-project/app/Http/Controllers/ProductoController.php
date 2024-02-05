<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::paginate(9);
        return view('productos.index', compact('productos'));
    }

    // Para probar si se crean
    public function create(){
        // Creo el producto
        $p = new Producto();
        $p->nombre = "Producto";
        $p->descripcion = "descripcion";
        $p->precio = 1.1;
        $p->unidades = 3;
        $p->imagen = "a";
        $p->categoria = "a";

        // Lo persisto en la base de datos:
        $p->save();

        return view('productos.create');
    }

    //Falta investigar cositas.
    public function show(request $request){
        $producto = Producto::find($request->id);
        return view('productos.show', compact('producto'));
    }

}
