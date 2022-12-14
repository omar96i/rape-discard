<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProyectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'aventura',
            'nombre' => '',
            'estado' => 'activo',
            'contacto' => '',
            'telefono' => '',
            'correo' => '',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }
}
