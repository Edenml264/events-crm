<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cotizacion>
 */
class CotizacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
    'cliente_id' => null, // Se asigna en el seeder
    'fecha' => $this->faker->dateTimeBetween('-2 months', 'now'),
    'estado' => $this->faker->randomElement(['pendiente', 'aceptada', 'rechazada', 'convertida']),
    'total' => $this->faker->randomFloat(2, 500, 20000),
    'notas' => $this->faker->optional()->sentence(),
];
    }
}
