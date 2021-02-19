<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFidelizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fidelizacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('genero');
            $table->string('edad');
            $table->string('nivel_educativo');
            $table->string('ocupacion');
            $table->string('etnia');
            $table->string('estado_civil');
            $table->string('hijos');
            $table->string('estrato');
            $table->string('idf_religion');
            $table->string('religion');
            $table->string('voluntariado');
            $table->string('actividad_voluntariado');
            $table->string('familiar');
            $table->integer('supo_inmediatamente');
            $table->integer('decision');
            $table->integer('no_ser_donante');
            $table->integer('dudas');
            $table->integer('me_gustaria_donar');
            $table->integer('inseguro');
            $table->integer('otra_persona');
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
        Schema::dropIfExists('fidelizacions');
    }
}
