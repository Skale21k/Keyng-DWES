<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tickets = [
            [
                'fecha' => '2021-10-01 10:00:00',
                'cliente_id' => 5,
                'total' => 100
            ],
            [
                'fecha' => '2021-10-02 10:00:00',
                'cliente_id' => 5,
                'total' => 200
            ],
            [
                'fecha' => '2021-10-03 10:00:00',
                'cliente_id' => 5,
                'total' => 300
            ],
            [
                'fecha' => '2021-10-04 10:00:00',
                'cliente_id' => 5,
                'total' => 400
            ],
            
        ];
    }
}
