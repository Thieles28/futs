<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaginaSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagina_sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_slider_um');
            $table->string('imagem_slider_um');
            $table->string('titulo_slider_dois');
            $table->string('imagem_slider_dois');
            $table->string('titulo_slider_tres');
            $table->string('imagem_slider_tres');
            $table->string('titulo_um');
            $table->string('descricao_um');
            $table->string('titulo_dois');
            $table->string('descricao_dois');
            $table->string('tipo');
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
        Schema::dropIfExists('pagina_sliders');
    }
}
