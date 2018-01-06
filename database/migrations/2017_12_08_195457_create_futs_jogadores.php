<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFutsJogadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('futs_jogadores', function (Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('time');
            $table->dateTime('data');
            $table->string('cidade');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('futs_jogadores');
    }
}
