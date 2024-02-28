<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Producto extends Model
{
    use HasFactory;


    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'unidades',
        'imagen',
        'categoria',
    ];

    public function getImagenUrlAttribute()
    {
        return Storage::url('img/' . $this->imagen);
    }

    public function categoria(){
        //return $this->belongsTo(Categoria::class);
        return $this->belongsTo('App\Models\Categoria');
    }
}
