<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DetalleTicket;

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
                'user_id' => 5,
            ],
            [
                'fecha' => '2021-10-02 10:00:00',
                'user_id' => 5,
            ],
            [
                'fecha' => '2021-10-03 10:00:00',
                'user_id' => 3,
            ],
            [
                'fecha' => '2021-10-04 10:00:00',
                'user_id' => 5,
            ],
            
        ];

        $detalles = DetalleTicket::all();

        foreach ($tickets as $ticket) {
            foreach ($detalles as $detalle) {
                $ticket = $detalle->ticket;
                $total = $ticket->detalles->sum(function($detalle) {
                    return $detalle->producto->precio;
                });
                $ticket->total = $total;
                $ticket->save();
            }
            \App\Models\Ticket::create($ticket);
        }
    }
}
