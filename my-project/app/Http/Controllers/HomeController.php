<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\DetalleTicket;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __invoke()
    {
        // Obtener las categorías
        $productosMasVendidos = DetalleTicket::select('producto_id', DB::raw('SUM(cantidad) as total_vendido'))
        ->groupBy('producto_id')
        ->orderByDesc('total_vendido')
        ->take(5) // Obtener los 5 productos más vendidos
        ->get();

        $productosIds = $productosMasVendidos->pluck('producto_id');
        $productos = Producto::whereIn('id', $productosIds)->get();

        return view('home', [
            'productosMasVendidos' => $productos,

        ]);
    }
}
