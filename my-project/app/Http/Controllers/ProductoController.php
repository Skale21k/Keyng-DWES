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
    public function create(request $request){

        return view('productos.create');
    }

    public function show($id)
    {
        $producto = Producto::find($id);
        return view('productos.show', compact('producto'));
    }

}
