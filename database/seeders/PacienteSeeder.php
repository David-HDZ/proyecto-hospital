<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $faker->seed(1234);
        foreach (range(1, 50) as $index) {
            DB::table('pacientes')->insert([
                'nombre' => $faker->unique()->name,
                'direccion' => $faker->address,
                'telefono' => $faker->phoneNumber,
                'edad' => $faker->numberBetween($min = 0, $max = 100),
                'sexo' => $faker->randomElement(['M', 'H']),
                'tipo' => $faker->randomElement(['urgencias', 'adios', 'consulta externa']),
                'created_at' => $faker->dateTime($max = 'now'),
                'updated_at' => $faker->dateTime($max = 'now'),
            ]);
        }
    }
}
