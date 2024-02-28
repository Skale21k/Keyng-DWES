<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\DetalleTicketSaved;

class ActualizarTotalTicketListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(DetalleTicketSaved $event)
    {
        $ticket = $event->detalleTicket->ticket;
        $total = $ticket->detalles->sum(function ($detalle) {
            return $detalle->cantidad * $detalle->producto->precio;
        });
        $ticket->total = $total;
        $ticket->save();
    }
}
