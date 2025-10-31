<?php

namespace Database\Factories;

use App\Models\Factura;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacturaFactory extends Factory
{
    protected $model = Factura::class;

    public function definition()
    {
        // Seleccionamos un cliente existente al crear facturas en el seeder.
        return [
            'cliente_id' => Cliente::inRandomOrder()->first()->id ?? 1, // fallback si aún no existe
            'fecha' => $this->faker->dateTimeBetween('-1 years', 'now')->format('Y-m-d'),
            'estado' => $this->faker->randomElement(['pendiente', 'pagada', 'anulada']),
        ];
    }
}
