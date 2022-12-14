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
        Schema::create('departamento_alimento_departamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alimento_departamento_id');
            $table->unsignedBigInteger('departamento_id');
            $table->integer('cantidad');
            $table->date('fecha');
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
        Schema::dropIfExists('departamento_alimento_departamentos');
    }
};
