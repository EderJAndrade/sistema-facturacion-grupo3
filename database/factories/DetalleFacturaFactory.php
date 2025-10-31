<?php

namespace Database\Factories;

use App\Models\DetalleFactura;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetalleFacturaFactory extends Factory
{
    protected $model = DetalleFactura::class;

    public function definition()
    {
        $cantidad = $this->faker->numberBetween(1, 5);

        return [
            'factura_id' => null, // se asigna desde el seeder
            'producto_id' => null, // se asigna desde el seeder
            'cantidad' => $cantidad,
            'precio_unitario' => null, // se asigna desde el seeder
            'subtotal' => null,        // se calcula desde el seeder
        ];
    }
}
