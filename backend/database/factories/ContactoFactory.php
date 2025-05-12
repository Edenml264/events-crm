<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contacto>
 */
class ContactoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
    'cliente_id' => null, // Se asignará en el seeder
    'nombre' => $this->faker->name(),
    'email' => $this->faker->unique()->safeEmail(),
    'telefono' => $this->faker->phoneNumber(),
    'puesto' => $this->faker->jobTitle(),
    'notas' => $this->faker->optional()->sentence(),
];
    }
}
