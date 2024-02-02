<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario; 

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios = [
            [
                'nombre' => 'Juan Pérez',
                'email' => 'juan.perez@example.com',
                'contraseña' => 'passwordJuan',
                'direccion' => 'Calle Real 123',
            ],
            [
                'nombre' => 'María García',
                'email' => 'maria.garcia@example.com',
                'contraseña' => 'passwordMaria',
                'direccion' => 'Avenida de la Luz 456',
            ],
            [
                'nombre' => 'Carlos Rodríguez',
                'email' => 'carlos.rodriguez@example.com',
                'contraseña' => 'passwordCarlos',
                'direccion' => 'Plaza Mayor 789',
            ],
            [
                'nombre' => 'Ana Torres',
                'email' => 'ana.torres@example.com',
                'contraseña' => 'passwordAna',
                'direccion' => 'Calle del Sol 159',
            ],
            
        ];
    
        foreach ($usuarios as $usuario) {
            Usuario::create($usuario);
        }
    }
}
