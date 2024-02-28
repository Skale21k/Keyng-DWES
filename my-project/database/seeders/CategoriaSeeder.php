<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Categoria::factory(10)->create();
        $categorias = [
            [
                'nombre' => 'Electrónica',
                'descripcion' => 'Productos electrónicos'
            ],
            [
                'nombre' => 'Hogar',
                'descripcion' => 'Productos para el hogar'
            ],
            [
                'nombre' => 'Deportes',
                'descripcion' => 'Productos deportivos'
            ],
            [
                'nombre' => 'Ropa',
                'descripcion' => 'Ropa para hombre y mujer'
            ],
            [
                'nombre' => 'Juguetes',
                'descripcion' => 'Juguetes para niños'
            ],
            [
                'nombre' => 'Mascotas',
                'descripcion' => 'Productos para mascotas'
            ],
            [
                'nombre' => 'Libros',
                'descripcion' => 'Libros de todo tipo'
            ],
            [
                'nombre' => 'Música',
                'descripcion' => 'CDs y vinilos'
            ],
            [
                'nombre' => 'Cine',
                'descripcion' => 'Películas en DVD y Blu-ray'
            ],
            [
                'nombre' => 'Videojuegos',
                'descripcion' => 'Videojuegos para consolas'
            ]
            ];
        foreach ($categorias as $categoria) {
            \App\Models\Categoria::create($categoria);
        }
    
    }
}
