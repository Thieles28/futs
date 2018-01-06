<?php

use Illuminate\Database\Seeder;
use App\Pagina;
use App\PaginaSlider;
use App\PaginaConteudo;
use App\PaginaArtilharia;
use App\PaginaPatrocinio;

class PaginaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Pagina Topo
        $existe = Pagina::where('tipo', '=', 'paginatopo')->count();

        if ($existe)
        {
            $paginatopo = Pagina::where('tipo', '=', 'paginatopo')->first();
        }else {
            $paginatopo = new Pagina();
        }
            $paginatopo->titulo = "Coloque seu titulo!";
            $paginatopo->subtitulo = "Coloque seu subtitulo";
            $paginatopo->logo = "img/logo.png";
            $paginatopo->imagem = "img/bg2.jpg";
            $paginatopo->tipo = "paginatopo";
            $paginatopo->save();
            echo "Pagina Criada com sucesso!";

        //Pagina Slider

        $existe = PaginaSlider::where('tipo', '=', 'paginaslider')->count();

        if ($existe)
        {
            $paginaslider = PaginaSlider::where('tipo', '=', 'paginaslider')->first();
        }else {
            $paginaslider = new PaginaSlider();
        }
            $paginaslider->titulo_slider_um = "Coloque aqui o titulo do seu Slider Primeiro";
            $paginaslider->imagem_slider_um = "img/bg3.jpeg";
            $paginaslider->titulo_slider_dois = "Coloque aqui o titulo do seu Slider Segundo";
            $paginaslider->imagem_slider_dois = "img/bg2.jpeg";
            $paginaslider->titulo_slider_tres = "Coloque aqui o titulo do seu Slider Terceiro";
            $paginaslider->imagem_slider_tres = "img/bg4.jpeg";
            $paginaslider->titulo_um = "Coloque aqui o titulo do seu site!";
            $paginaslider->descricao_um = "Coloque aqui sua descriçao do seu site!";
            $paginaslider->titulo_dois = "Coloque aqui o titulo do seu site dois!";
            $paginaslider->descricao_dois = "coloque aqui sua descriçao do seu site!";
            $paginaslider->tipo = "paginaslider";
            $paginaslider->save();
            echo "Pagina Slider criada com sucesso!";

        //Pagina Conteúdo

        $existe = PaginaConteudo::where('tipo', '=', 'paginaconteudo')->count();

        if ($existe)
        {
            $paginaconteudo = PaginaConteudo::where('tipo', '=', 'paginaconteudo')->first();
        }else {
            $paginaconteudo = new PaginaConteudo();
        }
            $paginaconteudo->titulo_conteudo = "Coloque aqui seu titulo!";
            $paginaconteudo->descricao_conteudo = "Coloque aqui sua descrição do titulo";
            $paginaconteudo->titulo_conteudo_primeiro = "Coloque aqui seu conteudo do titulo primeiro";
            $paginaconteudo->descricao_conteudo_primeiro = "coloque aqui a descrição do titulo primeiro";
            $paginaconteudo->titulo_conteudo_segundo = "Coloque aqui seu conteudo do titulo segundo";
            $paginaconteudo->descricao_conteudo_segundo = "Coloque aqui a descrição do titulo segundo";
            $paginaconteudo->titulo_conteudo_terceiro = "Coloque aqui o titulo do conteudo terceiro";
            $paginaconteudo->descricao_conteudo_terceiro = "Coloque aqui a descrição do titulo terceiro";
            $paginaconteudo->tipo = "paginaconteudo";
            $paginaconteudo->save();
            echo "Conteudo salvo com sucesso!";

        //Pagina Artilharia

        $existe = PaginaArtilharia::where('tipo', '=', 'paginartilharia')->count();

        if ($existe)
        {
            $paginartilharia = PaginaArtilharia::where('tipo', '=', 'paginartilharia')->first();
        }else {
            $paginartilharia = new PaginaArtilharia();
        }
            $paginartilharia->titulo_artilharia = "Coloque seu conteudo da artilharia";
            $paginartilharia->titulo_imagem_um = "Coloque seu titulo da imagem primeira";
            $paginartilharia->subtitulo_imagem_um = "Coloque seu subtitulo da imagem primeira";
            $paginartilharia->descricao_imagem_um = "Coloque sua descrição da sua imagem primeira";
            $paginartilharia->link_imagem_um = "Coloque seu link da imagem";
            $paginartilharia->titulo_link_um = "Coloque titulo link";
            $paginartilharia->titulo_imagem_dois = "Coloque seu titulo da imagem segunda";
            $paginartilharia->subtitulo_imagem_dois = "Coloque seu subtitulo da imagem segunda";
            $paginartilharia->descricao_imagem_dois = "Coloque sua descrição da imagem segunda";
            $paginartilharia->link_imagem_dois = "Coloque seu link da imagem dois";
            $paginartilharia->titulo_link_dois = "Coloque seu titulo link";
            $paginartilharia->titulo_imagem_tres = "Coloque seu titulo da imagem terceira";
            $paginartilharia->subtitulo_imagem_tres = "Coloque seu subtitulo da imagem terceira";
            $paginartilharia->descricao_imagem_tres = "Coloque sua descrição da imagem terceira";
            $paginartilharia->link_imagem_tres = "Coloque seu link imagem tres";
            $paginartilharia->titulo_link_tres = "Coloque seu titulo do link";
            $paginartilharia->imagem_artilharia_um = "img/neymar_avatar.jpg";
            $paginartilharia->imagem_artilharia_dois = "img/messi_avatar.jpg";
            $paginartilharia->imagem_artilharia_tres = "img/ronaldo_avatar.jpg";
            $paginartilharia->tipo = "paginartilharia";
            $paginartilharia->save();
            echo "Página Artilharia Salva com sucesso!";

            //Pagina Patrocínio
            $existe = PaginaPatrocinio::where('tipo', '=', 'paginapatrocinio')->count();

            if ($existe)
            {
                $paginapatrocinio = PaginaPatrocinio::where('tipo', '=', 'paginapatrocinio')->first();
            }else {
                $paginapatrocinio = new PaginaPatrocinio();
            }
                $paginapatrocinio->titulo_patrocinio = "Coloque seu titulo do Patrocínio";
                $paginapatrocinio->imagem_patrocinio_um = "img/client-1.jpg";
                $paginapatrocinio->imagem_patrocinio_dois = "img/client-2.jpg";
                $paginapatrocinio->imagem_patrocinio_tres = "img/client-3.jpg";
                $paginapatrocinio->imagem_patrocinio_quatro = "img/client-4.jpg";
                $paginapatrocinio->imagem_patrocinio_cinco = "img/client-5.jpg";
                $paginapatrocinio->imagem_patrocinio_seis = "img/client-6.jpg";
                $paginapatrocinio->tipo = "paginapatrocinio";
                $paginapatrocinio->save();
                echo "Página Patrocínio salva com sucesso!";
    }
}
