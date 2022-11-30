<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alimentos')->insert([
            'nombre' => 'Acelga',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('alimentos')->insert([
            'nombre' => 'Ahuyama',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('alimentos')->insert([
            'nombre' => 'Ajo',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('alimentos')->insert([
            'nombre' => 'Apio',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Arveja seca importada',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Arveja verde en vaina',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Berenjena',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Brócoli',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Calabacín',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Calabaza',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Cebolla cabezona blanca',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Cebolla cabezona roja',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Cebolla junca',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Chócolo mazorca',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Cilantro',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Coliflor',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Espinaca',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Fríjol',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Fríjol verde',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Garbanzo',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Granos Secos',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Habichuela',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Lechuga Batavia',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Lechuga crespa',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Lenteja',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Pepino cohombro',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Pepino de rellenar',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Perejil',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Pimentón',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Remolacha',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Repollo',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Tomate chonto',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Tomate de árbol',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Tomate Riogrande',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Tomates otros',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Verduras y hortalizas otras',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Zanahoria',
            'categoria' => 'Verduras y hortalizas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);




        DB::table('alimentos')->insert([
            'nombre' => 'Aguacate Choquette',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Aguacate común',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Aguacate Hass',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Aguacate papelillo',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Aguacates otros',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Banano bocadillo',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Banano criollo',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Ciruela importada',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Ciruela nacional',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Coco',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Curuba',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Durazno importado',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Durazno nacional',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Fresa',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Frutas importadas otras',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Frutas otras',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Granadilla',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Guanábana',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Guayaba pera',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Guayabas otras',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Gulupa',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Kiwi',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Limón común',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Limón mandarino',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Limón Tahití',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Lulo',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mandarina Arrayana',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mandarina Oneco',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mango común',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mango de azúcar',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mango Tommy',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mango Yulima',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mangos otros',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Manzana importada',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Manzana nacional',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Maracuyá',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Melón',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mora',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Naranja común',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Naranja Valencia y/o Sweet',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papaya Maradol',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papaya Paulina',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papaya tainung',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Patilla',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Patilla baby',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Pera importada',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Pera nacional',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Piña gold',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Pitahaya',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Tangelo',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Uchuva',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Uva importada',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Uva Isabela',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Uva nacional',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Zapote',
            'categoria' => 'Frutas Frescas',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);




        DB::table('alimentos')->insert([
            'nombre' => 'Arracacha',
            'categoria' => 'Tubérculos, raíces y plátanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Jengibre',
            'categoria' => 'Tubérculos, raíces y plátanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa Betina',
            'categoria' => 'Tubérculos, raíces y plátanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa capira',
            'categoria' => 'Tubérculos, raíces y plátanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa criolla',
            'categoria' => 'Tubérculos, raíces y plátanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa nevada',
            'categoria' => 'Tubérculos, raíces y plátanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa parda pastusa',
            'categoria' => 'Tubérculos, raíces y plátanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa R-12',
            'categoria' => 'Tubérculos, raíces y plátanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa rubí',
            'categoria' => 'Tubérculos, raíces y plátanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa superior',
            'categoria' => 'Tubérculos, raíces y plátanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa suprema',
            'categoria' => 'Tubérculos, raíces y plátanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Papa única',
            'categoria' => 'Tubérculos, raíces y plátanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Plátano guineo',
            'categoria' => 'Tubérculos, raíces y plátanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Plátano hartón verde',
            'categoria' => 'Tubérculos, raíces y plátanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Plátanos otros',
            'categoria' => 'Tubérculos, raíces y plátanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Ulluco',
            'categoria' => 'Tubérculos, raíces y plátanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Yuca',
            'categoria' => 'Tubérculos, raíces y plátanos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);




        DB::table('alimentos')->insert([
            'nombre' => 'Arroz',
            'categoria' => 'Granos y Cereales',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Avena',
            'categoria' => 'Granos y Cereales',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Maíz Amarillo',
            'categoria' => 'Granos y Cereales',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Maíz Blanco',
            'categoria' => 'Granos y Cereales',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);




        DB::table('alimentos')->insert([
            'nombre' => 'Bebidas lácteas',
            'categoria' => 'Huevos y Lácteos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Huevo',
            'categoria' => 'Huevos y Lácteos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Lácteos otros',
            'categoria' => 'Huevos y Lácteos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Leche en polvo',
            'categoria' => 'Huevos y Lácteos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Leche pasteurizada UHT',
            'categoria' => 'Huevos y Lácteos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Quesos y cuajadas',
            'categoria' => 'Huevos y Lácteos',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);




        DB::table('alimentos')->insert([
            'nombre' => 'Carne de cerdo',
            'categoria' => 'Carnes',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Carne de pollo',
            'categoria' => 'Carnes',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Carne de res',
            'categoria' => 'Carnes',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Carnes frias y embutidos',
            'categoria' => 'Carnes',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);




        DB::table('alimentos')->insert([
            'nombre' => 'Bocachico',
            'categoria' => 'Pescados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Cachama',
            'categoria' => 'Pescados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Camarón',
            'categoria' => 'Pescados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mariscos otros',
            'categoria' => 'Pescados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Mojarra',
            'categoria' => 'Pescados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Tilapia',
            'categoria' => 'Pescados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);




        DB::table('alimentos')->insert([
            'nombre' => 'Aceites',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Agua envasada',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Atún en lata',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Azúcar',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Bebidas alcohólicas',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Bebidas otras',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Café',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Cereales para desayuno',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Cervezas',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Chocolate',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Condimentos',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Confitería',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Conservas y enlatados',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Cremas y sopas',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Galletas',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Gaseosas y maltas',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Grasas',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Harinas',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Panela',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Pasabocas',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Pastas alimenticias',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Procesados otros',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Productos de panaderia',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Sal yodada',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Salsas y aderezos',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('alimentos')->insert([
            'nombre' => 'Sardinas en lata',
            'categoria' => 'Productos procesados',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }
}
