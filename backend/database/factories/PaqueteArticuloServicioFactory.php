<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaqueteArticuloServicio>
 */
class PaqueteArticuloServicioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
    'paquete_id' => null, // Se asigna en el seeder
    'articulo_servicio_id' => null, // Se asigna en el seeder
    'cantidad' => $this->faker->numberBetween(1, 10),
];
    }
}
