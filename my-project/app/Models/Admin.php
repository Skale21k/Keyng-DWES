<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'email',
        'password'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($admin) {
            $admin->password = Hash::make($admin->password);
        });
    }
}
