<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id_reserva');
            $table->integer('num_reserva')->length(10)->unsigned();
            $table->boolean('estado');
            
            $table->integer('ci')->unsigned();
            $table->foreign('ci')->references('id')->on('users')
            ->onDelete('cascade');

            $table->integer('id_viaje')->length(10)->unsigned();
            $table->foreign('id_viaje')->references('id_viaje')->on('viajes')
            ->onDelete('cascade');

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
        Schema::dropIfExists('reservas');
    }
}
