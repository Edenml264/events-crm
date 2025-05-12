<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ClienteSeeder::class, // Clientes y contactos
            ArticuloServicioSeeder::class, // Artículos y servicios
            PaqueteSeeder::class, // Paquetes
            PaqueteArticuloServicioSeeder::class, // Pivot: paquetes-artículos
            RentaSeeder::class, // Rentas y detalles
            CotizacionSeeder::class, // Cotizaciones y detalles
            ReparacionArticuloSeeder::class, // Reparaciones de artículos
        ]);

        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
