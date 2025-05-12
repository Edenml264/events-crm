<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear 10 clientes
        \App\Models\Cliente::factory(10)->create()->each(function ($cliente) {
            // Para cada cliente, crear entre 1 y 5 contactos relacionados
            \App\Models\Contacto::factory(rand(1, 5))->create([
                'cliente_id' => $cliente->id
            ]);
        });
    }
}
