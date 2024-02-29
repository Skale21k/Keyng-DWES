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
                'descripcion' => 'Productos electrónicos'       //1
            ],
            [
                'nombre' => 'Hogar',
                'descripcion' => 'Productos para el hogar'      //2
            ],
            [
                'nombre' => 'Deportes',
                'descripcion' => 'Productos deportivos'         //3
            ],
            [
                'nombre' => 'Ropa',
                'descripcion' => 'Ropa para hombre y mujer'     //4
            ],
            [
                'nombre' => 'Juguetes',
                'descripcion' => 'Juguetes para niños'          //5
            ],
            [
                'nombre' => 'Mascotas',
                'descripcion' => 'Productos para mascotas'          //6
            ],
            [
                'nombre' => 'Libros',
                'descripcion' => 'Libros de todo tipo'      //7
            ],
            [
                'nombre' => 'Música',
                'descripcion' => 'CDs y vinilos'            //8
            ],
            [
                'nombre' => 'Cine',
                'descripcion' => 'Películas en DVD y Blu-ray'           //9
            ],
            [
                'nombre' => 'Videojuegos',
                'descripcion' => 'Videojuegos para consolas'            //10
            ],
            [
                'nombre' => 'Alimentación',
                'descripcion' => 'Productos alimenticios'            //11
            ]
            ];
        foreach ($categorias as $categoria) {
            \App\Models\Categoria::create($categoria);
        }
    
    }
}
