<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'producto_id',
        'cantidad',
        'total',
        'fecha_compra'
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

        static::saving(function ($compra) {
            // Obtener el precio actual del producto
            $producto = Producto::find($compra->producto_id);
            $precioProducto = $producto->precio;

            // Calcular el total de la compra
            $totalCarrito = $precioProducto * $compra->cantidad;

            // Asignar el total calculado al campo total de la compra
            $compra->total = $totalCarrito;
        });
    }

}
