<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            /** Ejemplos
            $table->increments('id');
            $table->string('username', 32);
            $table->string('password');
            $table->smallInteger('votos');
            $table->string('direccion');
            $table->boolean('confirmado')->default(false);
            $table->timestamps();
             */
            $table->increments('id');
            $table->string('title');
            $table->string('year', 8);
            $table->string('director', 64);
            $table->string('poster');
            $table->boolean('rented')->defaul(false);
            $table->text('synopsis');
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
        Schema::dropIfExists('movies');
    }
}
