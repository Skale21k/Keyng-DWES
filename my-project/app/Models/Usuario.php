<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use App\Models\Carrito;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'email',
        'password',
        'direccion'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($usuario) {
            $usuario->password = Hash::make($usuario->password);
        });
    }

}
