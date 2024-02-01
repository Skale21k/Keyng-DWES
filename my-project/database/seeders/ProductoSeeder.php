<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $productos = [
            [
                'nombre' => 'Televisor Smart 50"',
                'descripcion' => 'Televisor con resolución 4K y conexión a internet',
                'precio' => 599.99,
                'unidades' => 20,
                'imagen' => 'televisor.jpg',
                'categoria' => 'Hogar',
            ],
            [
                'nombre' => 'Lavadora 8Kg',
                'descripcion' => 'Lavadora de carga frontal, eficiencia energética A++',
                'precio' => 349.99,
                'unidades' => 15,
                'imagen' => 'lavadora.jpg',
                'categoria' => 'Hogar',
            ],
            [
                'nombre' => 'Cafetera Express',
                'descripcion' => 'Cafetera Express con 15 bares de presión',
                'precio' => 89.99,
                'unidades' => 30,
                'imagen' => 'cafetera.jpg',
                'categoria' => 'Hogar',
            ],
            [
                'nombre' => 'Aceite de oliva virgen extra 1L',
                'descripcion' => 'Aceite de oliva de primera presión en frío',
                'precio' => 7.99,
                'unidades' => 200,
                'imagen' => 'aceite.jpg',
                'categoria' => 'Alimentación',
            ],
            [
                'nombre' => 'Licuadora de Frutas y Verduras',
                'descripcion' => 'Licuadora con potencia de 800W',
                'precio' => 45.99,
                'unidades' => 25,
                'imagen' => 'licuadora.jpg',
                'categoria' => 'Hogar',
            ],
            [
                'nombre' => 'Arroz Basmati 1Kg',
                'descripcion' => 'Arroz Basmati de grano largo',
                'precio' => 3.99,
                'unidades' => 150,
                'imagen' => 'arroz.jpg',
                'categoria' => 'Alimentación',
            ],
            [
                'nombre' => 'Tostadora de Pan',
                'descripcion' => 'Tostadora con capacidad para dos rebanadas',
                'precio' => 22.99,
                'unidades' => 30,
                'imagen' => 'tostadora.jpg',
                'categoria' => 'Hogar',
            ],
            [
                'nombre' => 'Pasta Integral 500g',
                'descripcion' => 'Pasta integral de trigo duro',
                'precio' => 1.99,
                'unidades' => 200,
                'imagen' => 'pasta.jpg',
                'categoria' => 'Alimentación',
            ],
            [
                'nombre' => 'Batidora de Mano',
                'descripcion' => 'Batidora de mano con potencia de 600W',
                'precio' => 29.99,
                'unidades' => 20,
                'imagen' => 'batidora.jpg',
                'categoria' => 'Hogar',
            ],
            [
                'nombre' => 'Atún en Aceite 160g',
                'descripcion' => 'Lata de atún en aceite de oliva',
                'precio' => 1.49,
                'unidades' => 100,
                'imagen' => 'atun.jpg',
                'categoria' => 'Alimentación',
            ]
            
        ];

        foreach ($productos as $producto) {
            Producto::create($producto);
        }

      
    }
}
