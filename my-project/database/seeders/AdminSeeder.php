<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'nombre' => 'Juan Pérez',
                'email' => 'juan.perez@gmail.com',
                'contraseña' => 'passwordJuan',
            ],
            [
                'nombre' => 'María García',
                'email' => 'maria.garcia@gmail.com',
                'contraseña' => 'passwordMaria',    
            ],
        ];

        foreach ($admins as $admin) {
            Admin::create($admin);
        }
    }
}
