<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; 

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'nombre' => 'Juan Pérez',
                'email' => 'juan.perez@example.com',
                'password' => 'passwordJuan',
                'direccion' => 'Calle Real 123',
            ],
            [
                'nombre' => 'María García',
                'email' => 'maria.garcia@example.com',
                'password' => 'passwordMaria',
                'direccion' => 'Avenida de la Luz 456',
            ],
            [
                'nombre' => 'Carlos Rodríguez',
                'email' => 'carlos.rodriguez@example.com',
                'password' => 'passwordCarlos',
                'direccion' => 'Plaza Mayor 789',
            ],
            [
                'nombre' => 'Ana Torres',
                'email' => 'ana.torres@example.com',
                'password' => 'passwordAna',
                'direccion' => 'Calle del Sol 159',
            ],
            [
                'nombre' => 'Alexandru Alin Olaru',
                'email' => 'alexandru@admin.com',
                'password' => 'alexandru',
                'rol' => 'admin',
                'imagen' => 'alexandru.jpg',
            ],
            [
                'nombre' => 'Alexandar Ivanov Svetlinov',
                'email' => 'alexandar@admin.com',
                'password' => 'alexandar',
                'rol' => 'admin',
                'imagen' => 'alexandar.jpg',
            ],
            [
                'nombre' => 'Sergio Kossowski',
                'email' => 'sergio@admin.com',
                'password' => 'sergio',
                'rol' => 'admin',
                'imagen' => 'sergio.jpg',
            ],
            [
                'nombre' => 'Ruben Darío Soto Montaña',
                'email' => 'dario@admin.com',
                'password' => 'dario',
                'rol' => 'admin',
                'imagen' => 'dario.jpg',
            ],
            
        ];
    
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
