<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetalleTicket>
 */
class DetalleTicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ticket_id' => $this->faker->numberBetween(1, 10),
            'producto_id' => $this->faker->numberBetween(1, 10),
            'cantidad' => $this->faker->numberBetween(1, 10),
        ];
    }
}
