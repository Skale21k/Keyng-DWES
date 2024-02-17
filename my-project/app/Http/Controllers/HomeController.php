<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        // categorias
        $productosAlimentacion = Producto::where('categoria', 'alimentacion')->get();
        $productosHogar = Producto::where('categoria', 'Hogar')->get();


        return view('home', [
            'productosAlimentacion' => $productosAlimentacion,
            'productosHogar' => $productosHogar,

        ]);
    }
}
