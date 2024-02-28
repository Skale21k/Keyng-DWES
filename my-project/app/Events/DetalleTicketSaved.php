
namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Ticket;

class DetalleTicketSaved
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $detalleTicket;

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
}