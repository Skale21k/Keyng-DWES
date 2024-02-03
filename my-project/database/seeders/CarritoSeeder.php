<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carrito;

class CarritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carritos = [
            [
                'usuario_id' => 1,
                'producto_id' => 1,
                'cantidad' => 2,
            ],
            [
                'usuario_id' => 1,
                'producto_id' => 2,
                'cantidad' => 3,
            ],
            [
                'usuario_id' => 2,
                'producto_id' => 3,
                'cantidad' => 1,
            ],
            [
                'usuario_id' => 2,
                'producto_id' => 4,
                'cantidad' => 4,
            ],
        ];

        foreach ($carritos as $carrito) {
            Carrito::create($carrito);
        }
    }
}
