<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    protected $model = Cliente::class;

    public function definition()
    {
        $faker = \Faker\Factory::create('es_ES');

        // Arreglo de ciudades y provincias en Ecuador
        $ubicaciones = [
            'Sangolquí, Pichincha, Ecuador',
            'Quito, Pichincha, Ecuador',
            'Guayaquil, Guayas, Ecuador',
            'Cuenca, Azuay, Ecuador',
            'Machala, El Oro, Ecuador',
            'Ambato, Tungurahua, Ecuador',
            'Manta, Manabí, Ecuador',
            'Ibarra, Imbabura, Ecuador',
            'Loja, Loja, Ecuador',
            'Esmeraldas, Esmeraldas, Ecuador',
        ];

        return [
            'nombre' => $faker->name(),
            'email' => $faker->unique()->userName() . '@grupo3.com', // correo con dominio @grupo3
            'telefono' => '09' . $faker->numberBetween(10000000, 99999999), // formato 0987654321
            'direccion' => $faker->randomElement($ubicaciones), // dirección aleatoria
        ];
    }
}
