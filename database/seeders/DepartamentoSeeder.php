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

        DB::table('departamentos')->insert([
            'nombre' => 'antioquia',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'bogotá d.c.',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'boyacá',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'bolivar',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'casanare',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'cauca',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'cesar',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'córdoba',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'cundinamarca',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'huila',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'meta',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'nariño',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'norte de santander',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'otro',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'otro dep',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'santander',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'valle del cauca',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }
}
