<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Ticket;

class DetalleTicketSaved
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $detalleTicket;

    public function __construct($detalleTicket)
    {
        $this->detalleTicket = $detalleTicket;
    }

    public function handle()
    {
        $ticket = Ticket::findOrFail($this->detalleTicket->ticket_id);

        $total = $ticket->detalles->sum(function ($detalle) {
            return $detalle->cantidad * $detalle->producto->precio;
        });

        $ticket->total = $total;
        $ticket->save();
    }
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
