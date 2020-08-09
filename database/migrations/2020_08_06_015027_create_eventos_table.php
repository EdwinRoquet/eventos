<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('num_evento');
            $table->string('institucion');
            $table->string('distrito');
            $table->foreignId('actividad_id')->references('id')->on('actividads')->comment('Actividades aninadas al evento');
            $table->foreignId('user_id')->references('id')->on('users')->comment('Usuario que asiste a un evento');
            $table->string('genero');
            $table->string('edad');
            $table->string('ocupacion');
            $table->string('observacion');
            $table->string('fecha');
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
        Schema::dropIfExists('eventos');
    }
}
