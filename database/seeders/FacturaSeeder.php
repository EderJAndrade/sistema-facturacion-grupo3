<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Factura;

class FacturaSeeder extends Seeder
{
    public function run(): void
    {
        // Solo se crean facturas, sin detalles
        Factura::factory()->count(100)->create();
    }
}
