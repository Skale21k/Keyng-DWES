<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Storage;
use App\Models\Categoria;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::paginate(12);
        $categorias = Categoria::all();
        return view('productos.index', compact('productos', 'categorias'));
    }

    // Para probar si se crean
    public function create(request $request){
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
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
        $producto->categoria_id = $request->categoria;

        $producto->save();

        return redirect()->intended(route('admin.productos'))->with('success', 'Producto creado exitosamente.');
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
            ->orWhereHas('categoria', function ($query) use ($nombre) {
                $query->where('nombre', 'like', '%' . $nombre . '%');
            })
            ->paginate(12);

        return view('productos.filtro', compact('productos', 'nombre'));
    }

    public function verProductos(){
        $productos = Producto::all();
        return view('admin.productos', compact('productos'));
    }

    public function destroy(Producto $producto){
        $producto->delete();
        return redirect()->back()->with('success', 'Producto eliminado exitosamente.');
    }

    public function edit(Producto $producto)
    {
        //dd($producto);
        $categorias = Categoria::all();
        return view('productos.edit', compact('producto'), compact('categorias'));
    }

    public function update(Producto $producto, Request $request){
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->unidades = $request->unidades;
        $producto->categoria_id = $request->categoria;
        if(isset($request->imagen)){
            Storage::delete('public/img/' . $producto->imagen);
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
            $imagen->move(storage_path('app/public/img'), $nombreImagen);
            $producto->imagen = $nombreImagen;
        }

        $producto->save();

        return redirect()->back()->with('success', 'Producto actualizado exitosamente.');
    }
    public function showCategoria($id){
        $productos = Producto::where('categoria_id', $id)->paginate(12);
        $categoria = Categoria::where('id', $id)->first()->nombre;
        $categorias = Categoria::all();
        return view('productos.productosCat', compact('productos', 'categoria', 'categorias'));
    }

}
