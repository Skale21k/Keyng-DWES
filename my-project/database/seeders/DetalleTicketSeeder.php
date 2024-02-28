<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetalleTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detallesTicket = [
            [
                'ticket_id' => 1,
                'producto_id' => 1,
                'cantidad' => 1,
            ],
            [
                'ticket_id' => 2,
                'producto_id' => 2,
                'cantidad' => 2,
            ],
            [
                'ticket_id' => 3,
                'producto_id' => 3,
                'cantidad' => 3,
            ],
            [
                'ticket_id' => 4,
                'producto_id' => 4,
                'cantidad' => 4,
            ],
            [
                'ticket_id' => 4,
                'producto_id' => 34,
                'cantidad' => 2,
            ],
        ];
    }
}
