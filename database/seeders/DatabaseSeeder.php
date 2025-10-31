<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ClienteSeeder::class,
            ProductoSeeder::class,
            FacturaSeeder::class,
            DetalleFacturaSeeder::class,
        ]);
    }
}
