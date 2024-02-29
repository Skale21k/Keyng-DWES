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
        $categorias = Categoria::all();
        $productosPorCategoria = [];

        foreach ($categorias as $categoria) {
            $productosPorCategoria[$categoria->nombre] = Producto::join('detalle_tickets', 'productos.id', '=', 'detalle_tickets.producto_id')
                ->select('productos.*', DB::raw('SUM(detalle_tickets.cantidad) as total_ventas'))
                ->where('productos.categoria_id', $categoria->id)
                ->groupBy('productos.id', 'productos.nombre', 'productos.descripcion', 'productos.precio', 'productos.unidades', 'productos.imagen', 'productos.categoria_id', 'productos.created_at', 'productos.updated_at')
                ->orderBy('total_ventas', 'desc')
                ->take(4)
                ->get();
        }

        return view('home', ['productosPorCategoria' => $productosPorCategoria]);
    }

}
