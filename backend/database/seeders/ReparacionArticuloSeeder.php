<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReparacionArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articulos = \App\Models\ArticuloServicio::all();
        foreach ($articulos as $articulo) {
            $numReparaciones = rand(0, 2);
            for ($i = 0; $i < $numReparaciones; $i++) {
                \App\Models\ReparacionArticulo::factory()->create([
                    'articulo_servicio_id' => $articulo->id,
                ]);
            }
        }
    }
}
