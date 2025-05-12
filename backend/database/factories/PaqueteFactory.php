<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paquete>
 */
class PaqueteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
    'nombre' => $this->faker->word() . ' paquete',
    'descripcion' => $this->faker->sentence(),
    'precio_paquete' => $this->faker->randomFloat(2, 500, 10000),
    'notas' => $this->faker->optional()->sentence(),
];
    }
}
