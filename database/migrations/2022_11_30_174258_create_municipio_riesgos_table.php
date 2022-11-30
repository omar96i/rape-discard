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
        Schema::create('municipio_riesgos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('municipio_id');
            $table->json('fechas');
            $table->string('evento');
            $table->integer('muertos')->nullable();
            $table->integer('heridos')->nullable();
            $table->integer('desaparecidos')->nullable();
            $table->integer('personas')->nullable();
            $table->integer('familias')->nullable();
            $table->integer('viv_destru')->nullable();
            $table->integer('viv_aver')->nullable();
            $table->integer('vias')->nullable();
            $table->integer('ptes_vehic')->nullable();
            $table->integer('ptes_peat')->nullable();
            $table->integer('acued')->nullable();
            $table->integer('alcant')->nullable();
            $table->integer('c_salud')->nullable();
            $table->integer('c_educat')->nullable();
            $table->integer('c_comunit')->nullable();
            $table->integer('hectareas')->nullable();
            $table->string('otros')->nullable();
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
        Schema::dropIfExists('municipio_riesgos');
    }
};
