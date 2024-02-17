<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        //return "Página de inicio";
        $productosAlimentacion = Producto::where('categoria', 'alimentacion')->get();
        return view('home', ['productosAlimentacion' => $productosAlimentacion]);
    }
}
