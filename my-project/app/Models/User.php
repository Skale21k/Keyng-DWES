<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nombre',
        'email',
        'password',
        'imagen',
        'rol',
        'direccion'
    ];

    protected static function boot()
    {
        parent::boot();
    
        static::saving(function ($user) {
            if ($user->isDirty('password')) {
                $user->password = Hash::make($user->password);
            }
        });
    }

    public function getImagenUrlAttribute()
    {
        return Storage::url('img/' . $this->imagen);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
