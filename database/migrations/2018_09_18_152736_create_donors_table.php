<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('second_name')->nullable();
            $table->string('surname');
            $table->string('second_surname')->nullable();
            $table->date('birthday');
            $table->string('document_type');
            $table->string('identification');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('place_id')->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('donors');
    }
}
