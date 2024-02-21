<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::paginate(12);
        return view('productos.index', compact('productos'));
    }

    // Para probar si se crean
    public function create(request $request){
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);


        $imagen = $request->file('imagen');

        $nombreImagen = time() . '_' . $imagen->getClientOriginalName();

        // Mueve la imagen a la carpeta
        $imagen->move(storage_path('app/public/img'), $nombreImagen);

        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->unidades = $request->unidades;
        $producto->imagen = $nombreImagen; // Guarda la ruta de la imagen en el campo 'imagen'
        $producto->categoria = $request->categoria;

        $producto->save();

        return redirect()->intended(route('productos.index'))->with('success', 'Producto creado exitosamente.');
    }

    public function show($id)
    {
        $producto = Producto::find($id);
        return view('productos.show', compact('producto'));
    }
    //filtra todo lo que contenga ese nombre
    public function filtro(Request $request){
        $nombre = $request->nombre;
        $productos = Producto::where('nombre', 'like', '%' . $nombre . '%')
        ->orWhere('descripcion', 'like', '%' . $nombre . '%')
        ->orWhere('categoria', 'like', '%' . $nombre . '%')
        ->get();

        return view('productos.filtro', compact('productos', 'nombre'));
    }

    public function verProductos(){
        $productos = Producto::all();
        return view('admin.productos', compact('productos'));
    }

}
