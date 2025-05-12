<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArticuloServicio>
 */
class ArticuloServicioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
    'nombre' => $this->faker->word() . ' ' . $this->faker->randomElement(['silla', 'mesa', 'pantalla', 'luz', 'bocina', 'flor', 'decoración']),
    'tipo' => $this->faker->randomElement(['mobiliario', 'audiovisual', 'decoración', 'floral', 'servicio']),
    'descripcion' => $this->faker->sentence(),
    'cantidad_total' => $this->faker->numberBetween(5, 50),
    'cantidad_disponible' => $this->faker->numberBetween(0, 50),
    'estado' => $this->faker->randomElement(['activo', 'en reparación', 'dado de baja']),
    'precio_renta' => $this->faker->randomFloat(2, 100, 5000),
];
    }
}
