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
        Schema::create('indicadores', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo_departamento')->nullable();
            $table->string('departamento')->nullable();
            $table->integer('codigo_entidad')->nullable();
            $table->string('entidad')->nullable();
            $table->string('dimension')->nullable();
            $table->string('indicador')->nullable();
            $table->double('dato_numerico')->nullable();
            $table->string('date')->nullable();
            $table->string('fuente')->nullable();
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
        Schema::dropIfExists('indicadores');
    }
};
