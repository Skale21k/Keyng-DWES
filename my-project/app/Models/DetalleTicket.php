<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleTicket extends Model
{
    use HasFactory;

    protected $fillable = ['ticket_id', 'producto_id', 'cantidad'];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
