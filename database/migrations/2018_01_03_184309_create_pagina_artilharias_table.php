<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaginaArtilhariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagina_artilharias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_artilharia');
            $table->string('titulo_imagem_um');
            $table->string('subtitulo_imagem_um');
            $table->string('descricao_imagem_um');
            $table->string('link_imagem_um');
            $table->string('titulo_link_um');
            $table->string('titulo_imagem_dois');
            $table->string('subtitulo_imagem_dois');
            $table->string('descricao_imagem_dois');
            $table->string('link_imagem_dois');
            $table->string('titulo_link_dois');
            $table->string('titulo_imagem_tres');
            $table->string('subtitulo_imagem_tres');
            $table->string('descricao_imagem_tres');
            $table->string('link_imagem_tres');
            $table->string('titulo_link_tres');
            $table->string('imagem_artilharia_um');
            $table->string('imagem_artilharia_dois');
            $table->string('imagem_artilharia_tres');
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
        Schema::dropIfExists('pagina_artilharias');
    }
}
