<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operativos', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('num_operativo');
            $table->string('nom_conductor');
            $table->date('fecha_operativo');
            $table->time('hora_operativo');
            $table->string('placa_vehiculo', 7);
            $table->string('modalidad', 30);
            $table->integer('num_vehiculo');
            $table->string('origen_ruta', 90);
            $table->time('hora_salida');
            $table->string('destino_ruta', 90);
            $table->string('sitio_operativo', 90);
            $table->integer('pasajeros_con_tiquete');
            $table->integer('pasajeros_sin_tiquete');
            $table->string('presentacion_conductor', 30);
            $table->string('presentacion_auxiliar', 30);
            $table->string('presentacion_vehiculo', 30);
            $table->longText('observaciones')->nullable();
            $table->string('estado', 30);

            $table->foreignId('user_id')
                ->constrained()
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
        Schema::dropIfExists('operativos');
    }
}
