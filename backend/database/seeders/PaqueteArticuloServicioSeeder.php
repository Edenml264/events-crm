<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaqueteArticuloServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paquetes = \App\Models\Paquete::all();
        $articulos = \App\Models\ArticuloServicio::all();

        foreach ($paquetes as $paquete) {
            $articulosRandom = $articulos->random(rand(2, 5));
            foreach ($articulosRandom as $articulo) {
                \App\Models\PaqueteArticuloServicio::factory()->create([
                    'paquete_id' => $paquete->id,
                    'articulo_servicio_id' => $articulo->id,
                ]);
            }
        }
    }
}
