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
        Schema::create('proceso', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('area', 100);
            $table->string('estado');
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
            $table->date('fecha_cierre')->nullable();
            $table->unsignedBigInteger('id_abogado');
            $table->unsignedBigInteger('id_juez')->nullable();
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->unsignedBigInteger('id_juzgado')->nullable();
            $table->string('nombre_demandante');
            $table->string('ci_demandante');
            $table->string('nombre_demandado');
            $table->string('ci_demandado');
            $table->string('determinacion')->nullable();
            $table->foreign('id_juez')->references('id')->on('juez');
            $table->foreign('id_cliente')->references('id')->on('cliente');
            $table->foreign('id_abogado')->references('id')->on('abogado');
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
        Schema::dropIfExists('proceso');
    }
};
