<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleTicket;
use App\Events\DetalleTicketSaved;

class DetalleTicketController extends Controller
{
    public function crearDetalle(Request $request)
    {
        DetalleTicket::create([
            'ticket_id' => $request->ticket_id,
            'producto_id' => $request->producto_id,
            'cantidad' => $request->cantidad,
            'precio_unitario' => $request->precio_unitario,
        ]);

        // Retorna la respuesta adecuada al cliente
    }

    public function obtenerDetalles()
    {
        $detalles = DetalleTicket::with('ticket')->with('producto')->get();
        return response()->json($detalles);
    }

}
