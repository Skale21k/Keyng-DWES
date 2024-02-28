<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        // Obtener las categorías
        $categoriaAlimentacion = Categoria::where('nombre', 'Alimentación')->first();
        $categoriaHogar = Categoria::where('nombre', 'Hogar')->first();

        // Obtener los productos asociados a las categorías
        $productosAlimentacion = Producto::where('categoria_id', $categoriaAlimentacion->id)
                                         ->take(5)
                                         ->get();
        $productosHogar = Producto::where('categoria_id', $categoriaHogar->id)
                                  ->take(5)
                                  ->get();

        return view('home', [
            'productosAlimentacion' => $productosAlimentacion,
            'productosHogar' => $productosHogar,

        ]);
    }
}
