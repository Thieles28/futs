<?php

namespace App\Http\Controllers;

use App\Pagina;
use App\PaginaArtilharia;
use App\PaginaConteudo;
use App\PaginaPatrocinio;
use App\PaginaSlider;
use Illuminate\Http\Request;

class PaginaController extends Controller
{

    public function index()
    {
        $paginas = Pagina::all();
        return view('pagina.index', compact('paginas'));
    }

    public function indexConteudo(){
        $paginas = PaginaConteudo::all();
        return view('pagina.index_conteudo', compact('paginas'));
    }

    public function indexSlider()
    {
        $paginas = PaginaSlider::all();
        return view('pagina.index_slider', compact('paginas'));
    }

    public function indexPatrocinio()
    {
        $paginas = PaginaPatrocinio::all();
        return view('pagina.index_patrocinio', compact('paginas'));
    }

    public function indexArtilharia()
    {
        $paginas = PaginaArtilharia::all();
        return view('pagina.index_artilharia', compact('paginas'));
    }

    public function editarConteudo($id)
    {
        $pagina = PaginaConteudo::find($id);
        return view('pagina.editar_conteudo', compact('pagina'));
    }
    public function editarSlider($id)
    {
        $pagina = PaginaSlider::find($id);
        return view('pagina.editar_slider', compact('pagina'));
    }

    public function editarArtilharia($id)
    {
        $pagina = PaginaArtilharia::find($id);
        return view('pagina.editar_artilharia', compact('pagina'));
    }

    public function editar($id)
    {
        $pagina = Pagina::find($id);
        return view('pagina.editar', compact('pagina'));
    }

    public function editarPatrocinio($id)
    {
        $pagina = PaginaPatrocinio::find($id);
        return view('pagina.editar_patrocinio', compact('pagina'));
    }

    public function atualizar(Request $request, $id)
    {
        $dados = $request->all();
        $pagina = Pagina::find($id);
        $pagina->titulo = trim($dados['titulo']);
        $pagina->subtitulo = trim($dados['subtitulo']);

        $file = $request->file('logo');
        if ($file)
        {
            $rand = rand(11111, 99999);
            $diretorio = "img/pagina".$id."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio, $nomeArquivo);
            $pagina->logo = $diretorio.'/'.$nomeArquivo;
        }
        $file = $request->file('imagem');
        if ($file)
        {
            $rand = rand(11111, 99999);
            $diretorio = "img/pagina".$id."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio, $nomeArquivo);
            $pagina->imagem = $diretorio.'/'.$nomeArquivo;
        }

        $pagina->Update();
        return redirect()->route('topo')->with('msg', 'Página Atualizada com Sucesso');

    }

    public function atualizarSlider(Request $request, $id)
    {
        $dados = $request->all();
        $paginaslider = PaginaSlider::find($id);
        $paginaslider->titulo_slider_um = trim($dados['titulo_slider_um']);
        $paginaslider->titulo_slider_dois = trim($dados['titulo_slider_dois']);
        $paginaslider->titulo_slider_tres = trim($dados['titulo_slider_tres']);
        $paginaslider->titulo_um = trim($dados['titulo_um']);
        $paginaslider->descricao_um = trim($dados['descricao_um']);
        $paginaslider->titulo_dois = trim($dados['titulo_dois']);
        $paginaslider->descricao_dois = trim($dados['descricao_dois']);

        $file = $request->file('imagem_slider_um');
        if ($file)
        {
            $rand = rand(11111, 99999);
            $diretorio = "img/slider".$id.'/';
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio, $nomeArquivo);
            $paginaslider->imagem_slider_um = $diretorio.'/'.$nomeArquivo;
        }

        $file = $request->file('imagem_slider_dois');
        if ($file)
        {
            $rand = rand(11111, 99999);
            $diretorio = "img/slider".$id."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio, $nomeArquivo);
            $paginaslider->imagem_slider_dois = $diretorio.'/'.$nomeArquivo;
        }

        $file = $request->file('imagem_slider_tres');
        if ($file)
        {
            $rand = rand(11111, 99999);
            $diretorio = "img/slider".$id."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio, $nomeArquivo);
            $paginaslider->imagem_slider_tres = $diretorio.'/'.$nomeArquivo;
        }

        $paginaslider->update();
        return redirect()->route('slider')->with('msg', 'Pagina Atualizada com sucesso');

    }

    public function atualizarConteudo(Request $request, $id)
    {
        $dados = $request->all();
        $paginaconteudo = PaginaConteudo::find($id);
        $paginaconteudo->titulo_conteudo = trim($dados['titulo_conteudo']);
        $paginaconteudo->descricao_conteudo = trim($dados['descricao_conteudo']);
        $paginaconteudo->titulo_conteudo_primeiro = trim($dados['titulo_conteudo_primeiro']);
        $paginaconteudo->descricao_conteudo_primeiro = trim($dados['descricao_conteudo_primeiro']);
        $paginaconteudo->titulo_conteudo_segundo = trim($dados['titulo_conteudo_segundo']);
        $paginaconteudo->descricao_conteudo_segundo = trim($dados['descricao_conteudo_segundo']);
        $paginaconteudo->titulo_conteudo_terceiro = trim($dados['titulo_conteudo_terceiro']);
        $paginaconteudo->descricao_conteudo_terceiro = trim($dados['descricao_conteudo_terceiro']);

        $paginaconteudo->update();
        return redirect()->route('conteudo')->with('msg', 'Página Atualizada com sucesso!');
    }

    public function atualizarArtilharia(Request $request, $id)
    {
        $dados = $request->all();
        $paginartilharia = PaginaArtilharia::find($id);
        $paginartilharia->titulo_artilharia = trim($dados['titulo_artilharia']);
        $paginartilharia->titulo_imagem_um = trim($dados['titulo_imagem_um']);
        $paginartilharia->subtitulo_imagem_um = trim($dados['subtitulo_imagem_um']);
        $paginartilharia->descricao_imagem_um = trim($dados['descricao_imagem_um']);
        $paginartilharia->link_imagem_um = trim($dados['link_imagem_um']);
        $paginartilharia->titulo_link_um = trim($dados['titulo_link_um']);
        $paginartilharia->titulo_imagem_dois = trim($dados['titulo_imagem_dois']);
        $paginartilharia->subtitulo_imagem_dois = trim($dados['subtitulo_imagem_dois']);
        $paginartilharia->descricao_imagem_dois = trim($dados['descricao_imagem_dois']);
        $paginartilharia->link_imagem_dois = trim($dados['link_imagem_dois']);
        $paginartilharia->titulo_link_dois = trim($dados['titulo_link_dois']);
        $paginartilharia->titulo_imagem_tres = trim($dados['titulo_imagem_tres']);
        $paginartilharia->subtitulo_imagem_tres = trim($dados['subtitulo_imagem_tres']);
        $paginartilharia->descricao_imagem_tres = trim($dados['descricao_imagem_tres']);
        $paginartilharia->link_imagem_tres = trim($dados['link_imagem_tres']);
        $paginartilharia->titulo_link_tres = trim($dados['titulo_link_tres']);

        $file = $request->file('imagem_artilharia_um');
        if ($file)
        {
            $rand = rand(11111, 99999);
            $diretorio = "img/paginas/artilharia".$id."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio, $nomeArquivo);
            $paginartilharia->imagem_artilharia_um = $diretorio.'/'.$nomeArquivo;
        }

        $file = $request->file('imagem_artilharia_dois');
        if ($file)
        {
            $rand = rand(11111, 99999);
            $diretorio = "img/paginas/artilharia".$id."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio, $nomeArquivo);
            $paginartilharia->imagem_artilharia_dois = $diretorio.'/'.$nomeArquivo;
        }

        $file = $request->file('imagem_artilharia_tres');
        if ($file)
        {
            $rand = rand(11111, 99999);
            $diretorio = "img/paginas/artilharia".$id."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio, $nomeArquivo);
            $paginartilharia->imagem_artilharia_tres = $diretorio.'/'.$nomeArquivo;
        }

        $paginartilharia->update();
        return redirect()->route('artilharia')->with('msg', 'Página Atualizada com Sucesso!');
    }

    public function atualizarPatrocinio(Request $request, $id)
    {
        $dados = $request->all();
        $paginapatrocinio = PaginaPatrocinio::find($id);
        $paginapatrocinio->titulo_patrocinio = trim($dados['titulo_patrocinio']);

        $file = $request->file('imagem_patrocinio_um');
        if ($file)
        {
            $rand = rand(11111, 99999);
            $diretorio = "img/pagina/patrocinio".$id."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio, $nomeArquivo);
            $paginapatrocinio->imagem_patrocinio_um = $diretorio.'/'.$nomeArquivo;
        }

        $file = $request->file('imagem_patrocinio_dois');
        if ($file)
        {
            $rand = rand(11111, 99999);
            $diretorio = "img/pagina/patrocinio".$id."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio, $nomeArquivo);
            $paginapatrocinio->imagem_patrocinio_dois = $diretorio.'/'.$nomeArquivo;
        }

        $file = $request->file('imagem_patrocinio_tres');
        if ($file)
        {
            $rand = rand(11111, 99999);
            $diretorio = "img/pagina/patrocinio".$id."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio, $nomeArquivo);
            $paginapatrocinio->imagem_patrocinio_tres = $diretorio.'/'.$nomeArquivo;
        }

        $file = $request->file('imagem_patrocinio_quatro');
        if ($file)
        {
            $rand = rand(11111, 99999);
            $diretorio = "img/pagina/patrocinio".$id."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio, $nomeArquivo);
            $paginapatrocinio->imagem_patrocinio_quatro = $diretorio.'/'.$nomeArquivo;
        }

        $file = $request->file('imagem_patrocinio_cinco');
        if ($file)
        {
            $rand = rand(11111, 99999);
            $diretorio = "img/pagina/patrocinio".$id."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio, $nomeArquivo);
            $paginapatrocinio->imagem_patrocinio_cinco = $diretorio.'/'.$nomeArquivo;
        }

        $file = $request->file('imagem_patrocinio_seis');
        if ($file)
        {
            $rand = rand(11111, 99999);
            $diretorio = "img/pagina/patrocinio".$id."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio, $nomeArquivo);
            $paginapatrocinio->imagem_patrocinio_seis = $diretorio.'/'.$nomeArquivo;
        }
        $paginapatrocinio->update();
        return redirect()->route('patrocinio')->with('msg', 'Página Atualizado com Sucesso!');
    }

    public function paginaTopo()
    {
        $pagina_topo = Pagina::where('tipo', '=', 'paginatopo')->first();
        $pagina_slider = PaginaSlider::where('tipo', '=', 'paginaslider')->first();
        $pagina_conteudo = PaginaConteudo::where('tipo', '=', 'paginaconteudo')->first();
        $pagina_artilharia = PaginaArtilharia::where('tipo', '=', 'paginartilharia')->first();
        $pagina_patrocinio = PaginaPatrocinio::where('tipo', '=', 'paginapatrocinio')->first();
        return view('welcome', compact('pagina_topo', 'pagina_slider', 'pagina_conteudo', 'pagina_artilharia', 'pagina_patrocinio'));
    }
}