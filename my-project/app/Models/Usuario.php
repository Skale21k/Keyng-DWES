<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'email',
        'contraseña',
        'direccion'
    ];

    public function setContraseñaAttribute($value)
    {
        $this->attributes['contraseña'] = Hash::make($value);
    }

}
