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
            'nombre' => 'Locombia Paraiso de Aventuras',
            'estado' => 'activo',
            'contacto' => 'Daniel Simón Templeton Vásquez',
            'telefono' => '31653223648',
            'correo' => 'locombia.ap@gmail.com',
            'rnt' => '43291',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Colombia Summit.',
            'estado' => 'activo',
            'contacto' => 'Enrique Orjuela Rozo',
            'telefono' => '3143280962 - 3125814017',
            'correo' => 'oficina@colombiansummit.com',
            'rnt' => '54755',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Agencia de viajes Operadora Cordillera Verde',
            'estado' => 'activo',
            'contacto' => 'Leticia Garzón Briceño',
            'telefono' => '3175301103',
            'correo' => 'espeletiatrip@gmail.com',
            'rnt' => '31004',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'atractivo turistico',
            'nombre' => 'Espeletia Trip',
            'estado' => 'activo',
            'contacto' => 'Breyler Jhair Sanabria Cortés',
            'telefono' => '3175301103',
            'correo' => 'espeletiatrip@gmail.com',
            'rnt' => '64373',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'hospedaje',
            'nombre' => 'Espeletia Expedition',
            'estado' => 'activo',
            'contacto' => 'Jenny Briyeth Contreras Labrador',
            'telefono' => '3183131019',
            'correo' => 'jenny_b12cl@hotmail.com',
            'rnt' => '63767',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Operadora de viajes Expediciones Tolima Biodiversa',
            'estado' => 'activo',
            'contacto' => 'Claudia Liliana Guerra Ruiz',
            'telefono' => '3138624859',
            'correo' => 'tolimabiodiversa@gmail.com',
            'rnt' => '37681',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Truman Adventure',
            'estado' => 'activo',
            'contacto' => 'David Alfonso Bejarano Bonilla',
            'telefono' => '3152927395',
            'correo' => 'trumandavid01@gmail.com',
            'rnt' => '43064',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Finca Agroturística el Paraíso',
            'estado' => 'activo',
            'contacto' => 'Adriano Vargas Reina',
            'telefono' => '3209808237',
            'correo' => 'corcoma.colombia@gmail.com',
            'rnt' => '46711',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Camaleon travel turismo y eventos',
            'estado' => 'activo',
            'contacto' => 'Edwin Fernando Arana',
            'telefono' => '3227634643',
            'correo' => 'redcamaleon.tye@gmail.com',
            'rnt' => '44190',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Greenland expeditions',
            'estado' => 'activo',
            'contacto' => 'Nicolás Galvis Rivera',
            'telefono' => '3173691773',
            'correo' => 'infogreenlandexpeditions@gmail.com',
            'rnt' => '59556',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'portal web',
            'nombre' => 'Tolima Travel',
            'estado' => 'activo',
            'contacto' => 'Naty Marcela Nieto Diaz',
            'telefono' => '3173379729',
            'correo' => 'tolimatravel@gmail.com',
            'rnt' => '73745',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Turivan por el río Magdalena SAS',
            'estado' => 'activo',
            'contacto' => 'Iván Romero',
            'telefono' => '3103723856',
            'correo' => 'turivanporelriomagdalena@hotmail.com',
            'rnt' => '61673',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Agencia de viajes Karimandy',
            'estado' => 'activo',
            'contacto' => 'Edwin Puentes Muñoz',
            'telefono' => '3173919242',
            'correo' => 'bufalosproducciones1@gmail.com',
            'rnt' => '62250',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Excursiones Juank',
            'estado' => 'activo',
            'contacto' => 'Carlos Alfonso Rodriguez m',
            'telefono' => '3142405580',
            'correo' => 'sandra-1056@hotmail.com',
            'rnt' => '36717',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'El Rancho de Kambalache y caravanas turísticas',
            'estado' => 'activo',
            'contacto' => 'Oscar Oliverio Ortiz',
            'telefono' => '3112562964',
            'correo' => 'kambalacheventas@hotmail.com',
            'rnt' => '54939',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Rivera Tours',
            'estado' => 'activo',
            'contacto' => 'Alvar Enrique Rivera Almario',
            'telefono' => '3112314986',
            'correo' => 'alvarorivera87@hotmail.com',
            'rnt' => '48922',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Vive Turismo y Deporte Extremo Colombia',
            'estado' => 'activo',
            'contacto' => 'Guisel Rodriguez Cruz',
            'telefono' => '3212576795',
            'correo' => 'colturvive@gmail.com',
            'rnt' => '22367',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Carapi Tours',
            'estado' => 'activo',
            'contacto' => 'Carlos Mario Tarquino Rodriguez',
            'telefono' => '3223534763',
            'correo' => 'carapitours@gmail.com',
            'rnt' => '46808',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Birding Peace Colombia',
            'estado' => 'activo',
            'contacto' => 'Valentina Bonilla Rubio',
            'telefono' => '3204919679',
            'correo' => 'birdingpeacecolombia@gmail.com',
            'rnt' => '71854',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Fénix Travel & Tours',
            'estado' => 'activo',
            'contacto' => 'Irma Rivera Sanchez',
            'telefono' => '3106083354',
            'correo' => 'travelfenix@yahoo.es',
            'rnt' => '41898',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Agencia de Viajes Operadora Alba Cruz',
            'estado' => 'activo',
            'contacto' => 'Alba Cruz Alvarado Castellanos',
            'telefono' => '3124882758',
            'correo' => 'albacruz55@hotmail.es',
            'rnt' => '76433',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Living Col S.A.S',
            'estado' => 'activo',
            'contacto' => 'Sindy Alejandra Ospina Rodriguez ',
            'telefono' => '3142143073',
            'correo' => 'info@livingcol.com',
            'rnt' => '25978',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Representaciones Vasygar',
            'estado' => 'activo',
            'contacto' => 'Gloria Janneth Vásquez Figueroa',
            'telefono' => '3186618346',
            'correo' => 'vasygar@gmail.com',
            'rnt' => '63961',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Agencia de viajes chivas viajes y turismo del Tolima',
            'estado' => 'activo',
            'contacto' => 'Hugo Alberto Pacheco Montero',
            'telefono' => '3112224090',
            'correo' => 'chivastourstolima@yahoo.es',
            'rnt' => '10753',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Colombia Xpedition',
            'estado' => 'activo',
            'contacto' => 'María Alejandra Lasso Reyes',
            'telefono' => '3219811042',
            'correo' => 'colombiaxpedition@gmail.com',
            'rnt' => '73344',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'La Chiva náutica',
            'estado' => 'activo',
            'contacto' => 'Nayer Dassmeny Castaleda Moncaleano',
            'telefono' => '3213012340',
            'correo' => 'lachivanauticaprado@yahoo.es',
            'rnt' => '17743',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'hospedaje',
            'nombre' => 'Finca Agroturística La Rivera',
            'estado' => 'activo',
            'contacto' => 'Finca Agroturística La Rivera',
            'telefono' => '3502839943',
            'correo' => 'fincalarivera@gmail.com',
            'rnt' => '71849',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Happy Soul',
            'estado' => 'activo',
            'contacto' => 'Angélica María Larrarte Ortiz',
            'telefono' => '3022672067',
            'correo' => 'angelica.larrarte@gmail.com',
            'rnt' => '71694',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Gamo Tour´s',
            'estado' => 'activo',
            'contacto' => 'Alvaro leonel Moreno García',
            'telefono' => '3147943289',
            'correo' => 'almorenog22@gmail.com',
            'rnt' => '67923',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Fénix Tours Colombia',
            'estado' => 'activo',
            'contacto' => 'Gertrudis Gómez Giraldo',
            'telefono' => '3115087674',
            'correo' => 'ger-ggg@hotmail.com',
            'rnt' => '66913',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Toliaventura Travel S.A.S',
            'estado' => 'activo',
            'contacto' => 'Diana Yinet Puerta Pachón',
            'telefono' => '3227133576',
            'correo' => 'toliaventuratravel@gmail.com',
            'rnt' => '63580',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'On Tour',
            'estado' => 'activo',
            'contacto' => 'Néstor Orlando Pardo Rivera',
            'telefono' => '3165386892',
            'correo' => 'ontoursas@gmail.com',
            'rnt' => '62212',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'atractivo turistico',
            'nombre' => 'Yaguaré',
            'estado' => 'activo',
            'contacto' => 'Karen Vargas Urueña',
            'telefono' => '2777229',
            'correo' => 'karenu23@hotmail.com',
            'rnt' => '45700',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Agencia de Viajes Operadora A Viajar Tolima',
            'estado' => 'activo',
            'contacto' => 'José María Hoyos Pardo',
            'telefono' => '3124857386',
            'correo' => 'aviajartolima.com@gmail.com',
            'rnt' => '45664',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Entreaguas Reserva Agroecoturística',
            'estado' => 'activo',
            'contacto' => 'Gissela Sánchez Castiblanco',
            'telefono' => '3008114476',
            'correo' => 'reservaentreaguas@gmail.com',
            'rnt' => '45123',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Escápate Agencia de Viajes y Turismo',
            'estado' => 'activo',
            'contacto' => 'María Alejandra Mahecha Ramírez',
            'telefono' => '3164436479',
            'correo' => 'ale_mahecha@hotmail.com',
            'rnt' => '44192',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Agencia de Viajes y Turismo Fervan Tour',
            'estado' => 'activo',
            'contacto' => 'Ferney Vanegas Cardona',
            'telefono' => '3112979078',
            'correo' => 'fervan08@hotmail.com',
            'rnt' => '34881',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Tolima Tours',
            'estado' => 'activo',
            'contacto' => 'Gloria Inírida Martinez Barrios',
            'telefono' => '3102896354',
            'correo' => 'eventosyturismogimb@hotmail.com',
            'rnt' => '27526',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'D´Classturs',
            'estado' => 'activo',
            'contacto' => 'Diana Marcela Garzón Arbelaez',
            'telefono' => '3115791723',
            'correo' => 'agenciadclastur@gmail.com',
            'rnt' => '22114',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Agencia Destinos',
            'estado' => 'activo',
            'contacto' => 'Patricia Rojas Garcés',
            'telefono' => '3204199366',
            'correo' => 'ventas@agenciadestinos.net',
            'rnt' => '31891',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Contactos Viajes y Turismo',
            'estado' => 'activo',
            'contacto' => 'Liborio Galindo Castro',
            'telefono' => '3132956476',
            'correo' => 'viajesyturismoltda1996@gmail.com',
            'rnt' => '30135',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Comercializar Viajes y Turismo',
            'estado' => 'activo',
            'contacto' => 'Norbey Rincón Cifuentes',
            'telefono' => '3158619031',
            'correo' => 'comerciatur@hotmail.com',
            'rnt' => '9443',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Aventura Colombiana',
            'estado' => 'activo',
            'contacto' => 'Carlos Rodriguez Parra',
            'telefono' => '3107885762',
            'correo' => 'aventuracolombiana@yahoo.com',
            'rnt' => '55834',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Fincas verdes',
            'estado' => 'activo',
            'contacto' => 'Daniel Salazar Gallego - Juan Carlos Vargas',
            'telefono' => '3134889422',
            'correo' => 'greenfarmsassociation@gmail.com',
            'rnt' => '65815',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Atlantis Travel',
            'estado' => 'activo',
            'contacto' => 'Nubia Galeano',
            'telefono' => '3143494293',
            'correo' => 'agenciaatlantistravel@gmail.com',
            'rnt' => '42550',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Rubiditours',
            'estado' => 'activo',
            'contacto' => 'Ana Rubiela Diago Meneses',
            'telefono' => '3208184832',
            'correo' => 'rubiditours@gmail.com',
            'rnt' => '17760',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'American Tour Viajes y Turismo',
            'estado' => 'activo',
            'contacto' => 'Juan Carlos Hernandez Barrero',
            'telefono' => '3124028502',
            'correo' => 'americantour70@gmail.com',
            'rnt' => '15036',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Toureventos nacionales',
            'estado' => 'activo',
            'contacto' => 'Reynel Oviedo Nieto',
            'telefono' => '3138149127',
            'correo' => 'toureventos@hotmail.com',
            'rnt' => '12898',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Agencia de Viajes Comfatolima',
            'estado' => 'activo',
            'contacto' => 'Nelson Norbey Quintero Melo',
            'telefono' => '2755242',
            'correo' => 'pamopa2010@hotmail.com',
            'rnt' => '12597',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);





        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Colombiatur',
            'estado' => 'activo',
            'contacto' => 'Marco Antonio Ramirez M',
            'telefono' => '2614083',
            'correo' => 'colombiatur@yahoo.com',
            'rnt' => '9825',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Serviturismo',
            'estado' => 'activo',
            'contacto' => 'Roberto Manjarrés Cifuentes',
            'telefono' => '2618358',
            'correo' => 'serviturismoibague@hotmail.com',
            'rnt' => '10861',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Itnnox',
            'estado' => 'activo',
            'contacto' => 'Clara Inés Carrera',
            'telefono' => '3219857105',
            'correo' => 'info@itnnox.com',
            'rnt' => '79208',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Ceibas Travel Ecoturismo. Agencia de Viajes y Aventura',
            'estado' => 'activo',
            'contacto' => 'Sofia Aristizábal',
            'telefono' => '3192157676',
            'correo' => 'gerencia@ceibastravel.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Dreamed Land Tours',
            'estado' => 'activo',
            'contacto' => 'Alexander Orrego Garcia',
            'telefono' => '3142925156',
            'correo' => 'dreamedlandtours@gmail.com ',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Termales la Quinta',
            'estado' => 'activo',
            'contacto' => 'Elena Mejia Echeverry',
            'telefono' => '3136536673',
            'correo' => 'termaleslaquintagerencia@gmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'hospedaje',
            'nombre' => 'La Estancia Hotel Boutique ',
            'estado' => 'activo',
            'contacto' => 'Maria Patricia Hernández',
            'telefono' => '3202100240',
            'correo' => 'laestanciahotelboutique@gmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Wayra Natura- Redescubriendo territorio',
            'estado' => 'activo',
            'contacto' => 'Leonardo Peláez Buitrago',
            'telefono' => '3186695989',
            'correo' => 'agroleopelaez1320@gmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'atractivo turistico',
            'nombre' => 'Termales El Escondite',
            'estado' => 'activo',
            'contacto' => 'Alvaro Osorio',
            'telefono' => '3214912837',
            'correo' => 'termaleselescondite@gmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Turismo Ximena Gómez',
            'estado' => 'activo',
            'contacto' => 'Ximena Gómez',
            'telefono' => '3218542535',
            'correo' => 'turismoximenagomez@gmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'hospedaje',
            'nombre' => 'Eco-Hotel Balmoral',
            'estado' => 'activo',
            'contacto' => 'Felipe Vallejo Velez',
            'telefono' => '3192157676',
            'correo' => 'balmoralecohotel@gmail.com ',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Trail Hunters',
            'estado' => 'activo',
            'contacto' => 'Paula Gallego Gallego',
            'telefono' => '3137109037',
            'correo' => 'contacto@trailhunters.co',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Tour Colombia',
            'estado' => 'activo',
            'contacto' => 'Henry Cesar Antonio Munera Martinelli',
            'telefono' => '3103198055',
            'correo' => 'tourcolombiamanizales@gmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Avistabirding',
            'estado' => 'activo',
            'contacto' => 'Edison Cañón',
            'telefono' => '3205591996',
            'correo' => 'avistarbirding@gmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Kumanday Adventures',
            'estado' => 'activo',
            'contacto' => 'Olga Lucía Grajales Cardona',
            'telefono' => '3155141873',
            'correo' => 'operaciones@kumanday.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Ecosistemas Viajes y Turismo',
            'estado' => 'activo',
            'contacto' => 'Maria Jimena Echavarría Gómez',
            'telefono' => '3174227713',
            'correo' => 'comercial@ecosistemastravel.com.co',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Carriel Mágico',
            'estado' => 'activo',
            'contacto' => 'Luz Inés García',
            'telefono' => '3105056845',
            'correo' => 'carrielmagico@gmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Amani Travel',
            'estado' => 'activo',
            'contacto' => 'José Fernando Londoño',
            'telefono' => '3116385231',
            'correo' => 'amanitravelco@gmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Armadillo Adventures',
            'estado' => 'activo',
            'contacto' => 'Alejandro Duque Arango',
            'telefono' => '3504933139',
            'correo' => 'alejandroduquearango@hotmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Viajes Turísticos Viatur',
            'estado' => 'activo',
            'contacto' => 'Fernando Londoño Hoyos',
            'telefono' => '3106399252',
            'correo' => 'viatur00@hotmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Andes Colombia',
            'estado' => 'activo',
            'contacto' => 'Elkin Mateo Moreno Cendales',
            'telefono' => '3007832892',
            'correo' => 'andesmzls@gmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'quindio',
            'tipo_de_turismo' => 'hospedaje',
            'nombre' => 'COMBIA ',
            'estado' => 'activo',
            'contacto' => 'Manuel Sabogal',
            'telefono' => '3216582577',
            'correo' => 'reservas.ash@avianethoteles.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'quindio',
            'tipo_de_turismo' => 'hospedaje',
            'nombre' => 'Granja ecohotel',
            'estado' => 'activo',
            'contacto' => 'RAUL PULIDO',
            'telefono' => '3122658574',
            'correo' => 'info@lagranjaecohotel.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'quindio',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Reserva la rivera',
            'estado' => 'activo',
            'contacto' => 'ANA MARIA GÓMEZ',
            'telefono' => '3155879346',
            'correo' => 'experiencias@reservalarivera.com.co',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'quindio',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Eco parque peñas Blancas',
            'estado' => 'activo',
            'contacto' => 'Javier Salazar',
            'telefono' => '3003165257',
            'correo' => 'ecoparquepenasblancas@hotmail.com',
            'rnt' => '53750',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Urapanes del bosque ',
            'estado' => 'activo',
            'contacto' => 'ALEXANDER TABARES',
            'telefono' => '3132226245',
            'correo' => 'urapanesdelbosque@gmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Ecolodge villa Laura',
            'estado' => 'activo',
            'contacto' => '',
            'telefono' => '3124537929',
            'correo' => 'ecolodgevillalaura@gmail.com',
            'rnt' => '735530',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Altos Cycling',
            'estado' => 'activo',
            'contacto' => '',
            'telefono' => '3113250307',
            'correo' => 'info@altoscycling.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Airnomads Colombia',
            'estado' => 'activo',
            'contacto' => '',
            'telefono' => '3154371521',
            'correo' => 'airnomadascol@gmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Kumanday Adventures',
            'estado' => 'activo',
            'contacto' => 'Juan Diego Giraldo',
            'telefono' => '3155141873',
            'correo' => 'operaciones@kumanday.Com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Florida Byke Shop',
            'estado' => 'activo',
            'contacto' => '',
            'telefono' => '3122225655',
            'correo' => 'shopfloridabyke@gmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Trail Hunters',
            'estado' => 'activo',
            'contacto' => 'Simòn Arias',
            'telefono' => '3127919289',
            'correo' => 'contacto@trailhunters.co',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Bikowelt',
            'estado' => 'activo',
            'contacto' => 'Marìa Alejandra Montoya',
            'telefono' => '3127983716',
            'correo' => 'bikowelt@gmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'atractivo turistico',
            'nombre' => 'La Ruta de los Ancestros',
            'estado' => 'activo',
            'contacto' => '',
            'telefono' => '3013592363',
            'correo' => 'larutadelosancestros@gmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Ecosistemas',
            'estado' => 'activo',
            'contacto' => 'Javier Echavarrìa',
            'telefono' => '3127057007',
            'correo' => '',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Corcade',
            'estado' => 'activo',
            'contacto' => 'Rud Naidù Aranzales',
            'telefono' => '3137508068',
            'correo' => '',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Retos MTB',
            'estado' => 'activo',
            'contacto' => 'Alexander Jimenez Matiz',
            'telefono' => '3137836544',
            'correo' => '',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Mundo Bike',
            'estado' => 'activo',
            'contacto' => '',
            'telefono' => '3146802980',
            'correo' => '',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Manchobike Travesìas Manzanares',
            'estado' => 'activo',
            'contacto' => '',
            'telefono' => '3216991894',
            'correo' => '',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Acletyfit Maratòn MTB Manizales',
            'estado' => 'activo',
            'contacto' => '',
            'telefono' => '3173033587',
            'correo' => '',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'caldas',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Álex Bike Travesía Fiestas del Aguacate en Norcasia',
            'estado' => 'activo',
            'contacto' => '',
            'telefono' => '3214533957',
            'correo' => '',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'quindio',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'La Ruta de la Bicicleta ABC',
            'estado' => 'activo',
            'contacto' => 'Ivàn Villanueva',
            'telefono' => '3105061613',
            'correo' => 'gerencia@rutadelabicicleta.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'quindio',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Dulceden Bicitur by Dulceden',
            'estado' => 'activo',
            'contacto' => 'Audi Yuliana Laguna Castillo',
            'telefono' => '3102262202',
            'correo' => '',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'quindio',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Mountain Bike Tours Salento Colombia',
            'estado' => 'activo',
            'contacto' => '',
            'telefono' => '3165351792',
            'correo' => '',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'quindio',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'Mauricio Silva On vacation AXM Agencia de viajes y mayorista de turísmo',
            'estado' => 'activo',
            'contacto' => 'Mauricio Silva',
            'telefono' => '318 8102622',
            'correo' => '',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'quindio',
            'tipo_de_turismo' => 'aventura ',
            'nombre' => 'Pedaling Coffee',
            'estado' => 'activo',
            'contacto' => 'Mauricio Londoño',
            'telefono' => '3117889205',
            'correo' => '',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'risaralda',
            'tipo_de_turismo' => 'aventura ',
            'nombre' => 'Rutas del Viento',
            'estado' => 'activo',
            'contacto' => 'Julián Mauricio Calle',
            'telefono' => '3004272010',
            'correo' => 'info@bicitoursrutasdelviento.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'risaralda',
            'tipo_de_turismo' => 'aventura ',
            'nombre' => 'Santa Rosa    Bikes',
            'estado' => 'activo',
            'contacto' => 'Fernando  Clavijo',
            'telefono' => '3104059229',
            'correo' => 'representacionlegaluton @gmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'risaralda',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Cicloexito Grupo de ciclistas',
            'estado' => 'activo',
            'contacto' => 'Juan Pablo Cardona',
            'telefono' => '3165790344',
            'correo' => '',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'risaralda',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Kamikaze',
            'estado' => 'activo',
            'contacto' => 'Santiago Robledo',
            'telefono' => '',
            'correo' => '',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'risaralda',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Club Cicloturista Titanes',
            'estado' => 'activo',
            'contacto' => 'Alirio Mejìa Correa',
            'telefono' => '3186363423',
            'correo' => '',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Byke House Ibaguè',
            'estado' => 'activo',
            'contacto' => 'Piedad Guzmán Acosta',
            'telefono' => '3004791082',
            'correo' => 'trochaysendero@yahoo.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),

        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'agencias de viajes',
            'nombre' => 'UCP Eventos Marketing Ruteros Tolima y Nacional ',
            'estado' => 'activo',
            'contacto' => 'Jehinson Vizcaya',
            'telefono' => '3103450998',
            'correo' => '',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Camaleon Travel',
            'estado' => 'activo',
            'contacto' => 'Edwin Fernando Arana',
            'telefono' => '3227634643',
            'correo' => 'redcamaleon.tye@gmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'aventura',
            'nombre' => 'Corporaciòn para el desarrollo de  la Ruta Mutis',
            'estado' => 'activo',
            'contacto' => 'Alba Alvarado',
            'telefono' => '3124882758',
            'correo' => 'guiasyturismo.tolimanorte@gmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Juan Palos Arte & Madera Bicicletas en Madera y tours en cicla en Honda',
            'estado' => 'activo',
            'contacto' => 'Juan Manuel Linares',
            'telefono' => '3228911273',
            'correo' => '',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('proyects')->insert([
            'departamento' => 'tolima',
            'tipo_de_turismo' => 'turismo verde y experiencias',
            'nombre' => 'Espeletia Trips',
            'estado' => 'activo',
            'contacto' => 'Breyler Sanabria',
            'telefono' => '3175301103',
            'correo' => 'espeletiatrip@gmail.com',
            'rnt' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		 	'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }
}
