<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('establecimiento_id')->nullable(); // 22
            $table->string('territorio')->nullable(); // 1
            $table->string('municipio')->nullable(); // 2
            $table->string('nombre_institucion')->nullable(); // 3
            $table->string('nombre')->nullable(); // 13
            $table->string('cod_dane_municipio')->nullable(); // 14
            $table->string('cod_dane')->nullable(); // 4
            $table->string('sede')->nullable(); // 5
            $table->string('cod_dane_sede')->nullable(); // 6
            $table->string('estado')->nullable(); // 7
            $table->string('ubicacion')->nullable(); // 8
            $table->string('direccion')->nullable(); // 9
            $table->string('modalidad')->nullable(); // 10
            $table->string('latitud')->nullable(); // 11
            $table->string('longitud')->nullable(); // 12
            $table->string('zona')->nullable(); // 15
            $table->string('direccion_2')->nullable(); // 16
            $table->string('telefono')->nullable(); // 17
            $table->string('estado_sede')->nullable(); // 18
            $table->string('niveles')->nullable(); // 19
            $table->string('grados')->nullable(); // 21
            $table->string('modelos')->nullable(); // 20
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instituciones');
    }
};
