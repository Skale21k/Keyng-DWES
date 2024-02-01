<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->paragraph(),
            'precio' => $this->faker->numberBetween(1, 99),
            'unidades' => $this->faker->numberBetween(1, 99),
            'imagen' => $this->faker->imageUrl(),
            'categoria' => $this->faker->word(),
        ];
    }
}
