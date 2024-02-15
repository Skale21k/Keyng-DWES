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
                'nombre' => 'admin1',
                'email' => 'admin@admin.com',
                'password' => 'admin',
                'rol' => 'admin',
            ],
            
        ];
    
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
