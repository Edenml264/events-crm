<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Renta>
 */
class RentaFactory extends Factory
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
    'fecha_inicio' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
    'fecha_fin' => $this->faker->dateTimeBetween('+2 days', '+2 months'),
    'ubicacion' => $this->faker->address(),
    'estado' => $this->faker->randomElement(['pendiente', 'confirmada', 'entregada', 'finalizada', 'cancelada']),
    'notas' => $this->faker->optional()->sentence(),
];
    }
}
