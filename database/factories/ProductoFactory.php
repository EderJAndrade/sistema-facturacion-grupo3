<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
        $faker = \Faker\Factory::create('es_ES');

        // Productos con su descripción fija
        $productos = [
            'Silla' => 'Silla de madera de roble',
            'Mesa' => 'Mesa de comedor de pino',
            'Cama' => 'Cama matrimonial con cabecera acolchada',
            'Lámpara' => 'Lámpara de escritorio con luz LED',
            'Escritorio' => 'Escritorio de oficina con cajones',
            'Armario' => 'Armario de madera con puertas corredizas',
            'Estante' => 'Estante modular para libros',
            'Reloj' => 'Reloj de pared con diseño moderno',
            'Sofá' => 'Sofá de cuero para sala',
            'Taburete' => 'Taburete alto de cocina',
            'Mueble' => 'Mueble de TV con estantes',
            'Cojín' => 'Cojín decorativo de algodón'
        ];

        // Elegir un producto aleatorio
        $nombre = $faker->randomElement(array_keys($productos));
        $descripcion = $productos[$nombre];

        return [
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'precio' => $faker->randomFloat(2, 10, 500),
            'stock' => $faker->numberBetween(0, 200),
        ];
    }
}