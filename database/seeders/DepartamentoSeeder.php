<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
            'nombre' => 'risaralda',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'quindio',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'tolima',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'caldas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }
}
