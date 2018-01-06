<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaginaConteudosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagina_conteudos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_conteudo');
            $table->string('descricao_conteudo');
            $table->string('titulo_conteudo_primeiro');
            $table->string('descricao_conteudo_primeiro');
            $table->string('titulo_conteudo_segundo');
            $table->string('descricao_conteudo_segundo');
            $table->string('titulo_conteudo_terceiro');
            $table->string('descricao_conteudo_terceiro');
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
        Schema::dropIfExists('pagina_conteudos');
    }
}
