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

    public function store(Request $request){
        $p = new Producto();
        $p->nombre = $request->nombre;
        $p->descripcion = $request->descripcion;
        $p->precio = $request->precio;
        $p->unidades = $request->unidades;
        $p->imagen = $request->imagen;
        $p->categoria = $request->categoria;

        // Lo persisto en la base de datos:
        $p->save();

        return view('productos.create');
    }

    public function show($id)
    {
        $producto = Producto::find($id);
        return view('productos.show', compact('producto'));
    }

    public function filtro(Request $request){
        $nombre = $request->nombre;
        $productos = Producto::where('nombre', 'like', '%' . $nombre . '%')->get();

        return view('productos.show', compact('productos'));
    }

}
