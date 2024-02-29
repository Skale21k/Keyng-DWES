<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\DetalleTicket;
use App\Models\User;

class TicketController extends Controller
{
    public function crearTicket(Request $request)
    {
        // Obtener el user a partir del ID proporcionado en la solicitud
        $user = User::findOrFail($request->user_id);

        // Lógica para crear un nuevo ticket
        $ticket = Ticket::create([
            'fecha' => now(),
            'user_id' => $user->id,
            'total' => $request->total, // Total de la compra
        ]);

        // Asocia los productos comprados al ticket
        foreach ($request->productos as $producto) {
            DetalleTicket::create([
                'ticket_id' => $ticket->id,
                'producto_id' => $producto['id'],
                'cantidad' => $producto['cantidad'],
                'precio_unitario' => $producto['precio'],
            ]);
        }

        // Retorna la respuesta adecuada al user (puede ser un JSON con el número de ticket, por ejemplo)
    }

    public function index()
    {
        // Recuperar todos los tickets del usuario actual
        $tickets = auth()->user()->tickets;

        // Pasar los tickets a la vista
        return view('tickets.index', compact('tickets'));
    }

    public function obtenerTickets()
    {
        $tickets = Ticket::with('user')->with('detalles')->get();
        return response()->json($tickets);
    }
}
