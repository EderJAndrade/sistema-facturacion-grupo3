<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Factura;
use App\Models\DetalleFactura;
use App\Models\Producto;

class DetalleFacturaSeeder extends Seeder
{
    public function run(): void
    {
        $facturas = Factura::all();

        foreach ($facturas as $factura) {
            // Seleccionar entre 1 y 5 productos distintos
            $productos = Producto::inRandomOrder()->take(rand(1,5))->get();

            foreach ($productos as $producto) {
                $cantidad = rand(1, 5);
                $precio = $producto->precio;

                DetalleFactura::factory()->create([
                    'factura_id' => $factura->id,
                    'producto_id' => $producto->id,
                    'cantidad' => $cantidad,
                    'precio_unitario' => $precio,
                    'subtotal' => round($cantidad * $precio, 2),
                ]);
            }

            // Recalcular total de la factura
            $factura->total = $factura->detalleFacturas()->sum('subtotal');
            $factura->save();
        }
    }
}
