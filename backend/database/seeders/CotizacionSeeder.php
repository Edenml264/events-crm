<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CotizacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientes = \App\Models\Cliente::all();
        $articulos = \App\Models\ArticuloServicio::all();
        $paquetes = \App\Models\Paquete::all();

        foreach ($clientes as $cliente) {
            $numCotizaciones = rand(1, 2);
            for ($i = 0; $i < $numCotizaciones; $i++) {
                $cotizacion = \App\Models\Cotizacion::factory()->create([
                    'cliente_id' => $cliente->id,
                ]);
                // Detalles de artículos
                $articulosRandom = $articulos->random(rand(1, 3));
                foreach ($articulosRandom as $articulo) {
                    \App\Models\DetalleCotizacion::factory()->create([
                        'cotizacion_id' => $cotizacion->id,
                        'articulo_servicio_id' => $articulo->id,
                    ]);
                }
                // Detalles de paquetes
                if ($paquetes->count() > 0 && rand(0, 1)) {
                    $paquetesRandom = $paquetes->random(rand(1, min(2, $paquetes->count())));
                    foreach ($paquetesRandom as $paquete) {
                        \App\Models\DetalleCotizacionPaquete::factory()->create([
                            'cotizacion_id' => $cotizacion->id,
                            'paquete_id' => $paquete->id,
                        ]);
                    }
                }
            }
        }
    }
}
