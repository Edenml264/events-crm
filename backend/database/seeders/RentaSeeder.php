<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientes = \App\Models\Cliente::all();
        $articulos = \App\Models\ArticuloServicio::all();

        foreach ($clientes as $cliente) {
            $numRentas = rand(1, 3);
            for ($i = 0; $i < $numRentas; $i++) {
                $renta = \App\Models\Renta::factory()->create([
                    'cliente_id' => $cliente->id,
                ]);
                // Para cada renta, crear 1-4 detalles
                $articulosRandom = $articulos->random(rand(1, 4));
                foreach ($articulosRandom as $articulo) {
                    \App\Models\DetalleRenta::factory()->create([
                        'renta_id' => $renta->id,
                        'articulo_servicio_id' => $articulo->id,
                    ]);
                }
            }
        }
    }
}
