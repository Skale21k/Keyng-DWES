<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\DetalleTicketSaved;

class DetalleTicket extends Model
{
    use HasFactory;

    protected $fillable = ['ticket_id', 'producto_id', 'cantidad'];

    protected static function boot()
    {
        parent::boot();

        static::saved(function ($detalleTicket) {
            // Cuando se guarde un detalle de ticket, emitir un evento para actualizar el total del ticket
            event(new DetalleTicketSaved($detalleTicket));
        });
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
