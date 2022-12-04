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
            $table->date('fecha');
            $table->string('evento');
            $table->integer('muertos')->default(0);
            $table->integer('heridos')->default(0);
            $table->integer('desaparecidos')->default(0);
            $table->integer('personas')->default(0);
            $table->integer('familias')->default(0);
            $table->integer('viv_destru')->default(0);
            $table->integer('viv_aver')->default(0);
            $table->integer('vias')->default(0);
            $table->integer('ptes_vehic')->default(0);
            $table->integer('ptes_peat')->default(0);
            $table->integer('acued')->default(0);
            $table->integer('alcant')->default(0);
            $table->integer('c_salud')->default(0);
            $table->integer('c_educat')->default(0);
            $table->integer('c_comunit')->default(0);
            $table->integer('hectareas')->default(0);
            $table->string('otros')->default(0);
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
