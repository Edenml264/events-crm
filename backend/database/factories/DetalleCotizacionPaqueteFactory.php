<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetalleCotizacionPaquete>
 */
class DetalleCotizacionPaqueteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
    'cotizacion_id' => null, // Se asigna en el seeder
    'paquete_id' => null, // Se asigna en el seeder
    'cantidad' => $this->faker->numberBetween(1, 5),
    'precio_paquete' => $this->faker->randomFloat(2, 500, 10000),
    'notas' => $this->faker->optional()->sentence(),
];
    }
}
