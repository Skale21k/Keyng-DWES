<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Producto extends Model
{
    use HasFactory;


    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'unidades',
        'imagen',
        'categoria'
    ];

    public function getImagenUrlAttribute()
    {
        return asset('asset/img/' . $this->imagen);
    }
}
