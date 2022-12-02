<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipios')->insert([
            'departamento_id' => '1',
            'nombre' => 'Apía',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '1',
            'nombre' => 'Balboa',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '1',
            'nombre' => 'Belén de Umbría',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '1',
            'nombre' => 'Dosquebradas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '1',
            'nombre' => 'Guática',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '1',
            'nombre' => 'La Celia',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '1',
            'nombre' => 'La Virginia',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '1',
            'nombre' => 'Marsella',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '1',
            'nombre' => 'Mistrató',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '1',
            'nombre' => 'Pereira',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '1',
            'nombre' => 'Pueblo Rico',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '1',
            'nombre' => 'Quinchía',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '1',
            'nombre' => 'Santa Rosa de Cabal',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '1',
            'nombre' => 'Santuario',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);






        DB::table('municipios')->insert([
            'departamento_id' => '2',
            'nombre' => 'Armenia',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '2',
            'nombre' => 'Buenavista',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '2',
            'nombre' => 'Calarcá',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '2',
            'nombre' => 'Circasia',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '2',
            'nombre' => 'Córdoba',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '2',
            'nombre' => 'Filandia',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '2',
            'nombre' => 'Génova',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '2',
            'nombre' => 'La Tebaida',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '2',
            'nombre' => 'Montenegro',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '2',
            'nombre' => 'Pijao',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '2',
            'nombre' => 'Quimbaya',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '2',
            'nombre' => 'Salento',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);



        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Alvarado',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Anzoátegui',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Cajamarca',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Coello',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Espinal',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Flandes',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Ibagué',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Piedras',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Rovira',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'San Luis',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Valle de San Juan',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Casabianca',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Herveo',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Lérida',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Líbano',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Murillo',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Santa Isabel',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Venadillo',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Villahermosa',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Ambalema',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Armero',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Falan',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Fresno',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Honda',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Mariquita',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Palocabildo',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Carmen de Apicalá',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Cunday',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Icononzo',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Melgar',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Villarrica',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Ataco',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Chaparral',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Coyaima',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Natagaima',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Ortega',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Planadas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Rioblanco',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Roncesvalles',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'San Antonio',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Alpujarra',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Dolores',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Guamo',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Prado',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Purificación',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Saldaña',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '3',
            'nombre' => 'Suárez',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);





        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Filadelfia',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'La Merced',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Marmato',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Riosucio',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Supía',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Manzanares',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Marquetalia',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Marulanda',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Pensilvania',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Anserma',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Belalcázar',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Risaralda',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'San José',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Viterbo',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Chinchiná',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Manizales',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Neira',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Palestina',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Villamaría',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'La Dorada',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Norcasia',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Samaná',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Victoria',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Aguadas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Aranzazu',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Pácora',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('municipios')->insert([
            'departamento_id' => '4',
            'nombre' => 'Salamina',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);






    }
}
