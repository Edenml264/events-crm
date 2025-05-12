<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReparacionArticulo>
 */
class ReparacionArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
    'articulo_servicio_id' => null, // Se asigna en el seeder
    'fecha_inicio' => $this->faker->dateTimeBetween('-6 months', 'now'),
    'fecha_fin' => $this->faker->optional()->dateTimeBetween('now', '+6 months'),
    'descripcion' => $this->faker->sentence(),
    'estado' => $this->faker->randomElement(['pendiente', 'en proceso', 'finalizada']),
];
    }
}
