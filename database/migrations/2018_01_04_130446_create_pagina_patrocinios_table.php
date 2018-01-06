<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaginaPatrociniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagina_patrocinios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_patrocinio');
            $table->string('imagem_patrocinio_um');
            $table->string('imagem_patrocinio_dois');
            $table->string('imagem_patrocinio_tres');
            $table->string('imagem_patrocinio_quatro');
            $table->string('imagem_patrocinio_cinco');
            $table->string('imagem_patrocinio_seis');
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
        Schema::dropIfExists('pagina_patrocinios');
    }
}
