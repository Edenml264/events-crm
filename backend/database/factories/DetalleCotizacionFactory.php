<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetalleCotizacion>
 */
class DetalleCotizacionFactory extends Factory
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
    'articulo_servicio_id' => null, // Se asigna en el seeder
    'cantidad' => $this->faker->numberBetween(1, 10),
    'precio_unitario' => $this->faker->randomFloat(2, 100, 5000),
];
    }
}
