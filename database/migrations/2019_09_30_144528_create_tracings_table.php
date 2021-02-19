<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identificacion');
            $table->integer('recuerda_preinscripcion');
            $table->integer('recuerda_correo')->nullable();
            $table->integer('recuerda_spam')->nullable();
            $table->integer('SMS')->nullable();
            $table->string('razon')->nullable();
            $table->text('observacion')->nullable();
            $table->integer('desea_continuar');
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
        Schema::dropIfExists('tracings');
    }
}
