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
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->id();
            $table->string('cod_dane')->nullable();
            $table->string('nombre')->nullable();
            $table->string('territorio')->nullable();
            $table->string('municipio')->nullable();
            $table->string('total_sedes')->nullable();
            $table->string('secretaria')->nullable();
            $table->string('cod_dane_municipio')->nullable();
            $table->string('nombre_municipio')->nullable();
            $table->string('nombre_establecimiento')->nullable();
            $table->string('telefono')->nullable();
            $table->string('nombre_rector')->nullable();
            $table->string('tipo_establecimiento')->nullable();
            $table->string('etnias')->nullable();
            $table->string('sector')->nullable();
            $table->string('genero')->nullable();
            $table->string('zona')->nullable();
            $table->string('niveles')->nullable();
            $table->string('jornadas')->nullable();
            $table->string('caracter')->nullable();
            $table->string('especialidad')->nullable();
            $table->string('licencia')->nullable();
            $table->string('grados')->nullable();
            $table->string('modelo_educativo')->nullable();
            $table->string('capacidades_excepcionales')->nullable();
            $table->text('discapacidades')->nullable();
            $table->string('idiomas')->nullable();
            $table->string('numero_sedes')->nullable();
            $table->string('estado')->nullable();
            $table->string('prestador_de_servicio')->nullable();
            $table->string('propiedad_planta_fisica')->nullable();
            $table->string('resguardo')->nullable();
            $table->string('matricula_contratada')->nullable();
            $table->string('calendario')->nullable();
            $table->string('internado')->nullable();
            $table->string('estrato')->nullable();
            $table->string('correo_electronico')->nullable();
            $table->string('cod_secretaria')->nullable();
            $table->string('nombre_establecimiento_2')->nullable();
            $table->string('sector_2')->nullable();
            $table->string('web')->nullable();
            $table->string('total_matricula')->nullable();
            $table->string('cantidad_sedes')->nullable();
            $table->string('grupo')->nullable();
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
        Schema::dropIfExists('establecimientos');
    }
};
