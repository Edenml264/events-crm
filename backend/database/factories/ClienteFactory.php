<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
    'nombre_razon_social' => $this->faker->company(),
    'tipo' => $this->faker->randomElement(['Persona Moral', 'Persona Física']),
    'rfc' => $this->faker->regexify('[A-Z]{4}[0-9]{6}[A-Z0-9]{3}'),
    'direccion_fiscal' => $this->faker->address(),
    'notas' => $this->faker->optional()->sentence(),
];
    }
}
