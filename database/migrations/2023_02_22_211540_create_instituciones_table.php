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
            $table->string('territorio')->nullable();
            $table->string('fid_colegio')->nullable();
            $table->string('id_institucion')->nullable();
            $table->string('municipio')->nullable();
            $table->string('nombre_institucion')->nullable();
            $table->string('norte')->nullable();
            $table->string('este')->nullable();
            $table->string('cod_dane')->nullable();
            $table->string('sede')->nullable();
            $table->string('cod_dane_sede')->nullable();
            $table->string('estado')->nullable();
            $table->string('ubicacion')->nullable();
            $table->string('direccion')->nullable();
            $table->string('modalidad')->nullable();
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
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
