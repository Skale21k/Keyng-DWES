<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Compra;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $compras = [
            [
                'usuario_id' => rand(1, 4),
                'producto_id' => rand(1, 10),
                'cantidad' => 2,
                'fecha_compra' => '2021-10-01 10:00:00',
            ],
            [
                'usuario_id' => rand(1, 4),
                'producto_id' => rand(1, 10),
                'cantidad' => 3,
                'fecha_compra' => '2021-10-02 10:00:00',
            ],
            [
                'usuario_id' => rand(1, 4),
                'producto_id' => rand(1, 10),
                'cantidad' => 4,
                'fecha_compra' => '2021-10-03 10:00:00',
            ],
            [
                'usuario_id' => rand(1, 4),
                'producto_id' => rand(1, 10),
                'cantidad' => 5,
                'fecha_compra' => '2021-10-04 10:00:00',
            ],
        ];

        foreach ($compras as $compra) {
            Compra::create($compra);
        }
    }
}
