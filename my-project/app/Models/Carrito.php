<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuario_id',
        'producto_id',
        'cantidad',
        'total'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function producto()
    {
        return $this->belongsToMany(Producto::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($carrito) {
            // Obtener el precio actual del producto
            $producto = Producto::find($carrito->producto_id);
            $precioProducto = $producto->precio;

            // Calcular el total del carrito
            $totalCarrito = $precioProducto * $carrito->cantidad;

            // Asignar el total calculado al campo total del carrito
            $carrito->total = $totalCarrito;
        });
    }

}
