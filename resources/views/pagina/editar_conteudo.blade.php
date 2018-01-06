@extends('layouts.dash')
@section('content')
    <div class="content">
        <div class="container">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Editar Páginas</h4>
                    <form action="{{ route('atualizar_conteudo', $pagina->id) }}" method="post" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input class="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="userName">Titulo Conteudo</label>
                            <input type="text" name="titulo_conteudo" placeholder="Entre com seu titulo"
                                   value="{{ isset($pagina->titulo_conteudo) ? $pagina->titulo_conteudo : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="userName">Descrição Conteudo</label>
                            <input type="text" name="descricao_conteudo" placeholder="Entre com seu titulo"
                                   value="{{ isset($pagina->descricao_conteudo) ? $pagina->descricao_conteudo : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="userName">Titulo Conteudo Primeiro</label>
                            <input type="text" name="titulo_conteudo_primeiro" placeholder="Entre com seu titulo"
                                   value="{{ isset($pagina->titulo_conteudo_primeiro) ? $pagina->titulo_conteudo_primeiro : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="userName">Descrição Conteudo Primeiroo</label>
                            <input type="text" name="descricao_conteudo_primeiro" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->descricao_conteudo_primeiro) ? $pagina->descricao_conteudo_primeiro : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">Titulo Conteudo Segundo</label>
                            <input type="text" name="titulo_conteudo_segundo" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->titulo_conteudo_segundo) ? $pagina->titulo_conteudo_segundo : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">Descrição Conteudo Segundo</label>
                            <input type="text" name="descricao_conteudo_segundo" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->descricao_conteudo_segundo) ? $pagina->descricao_conteudo_segundo : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">Titulo Conteudo Terceiro</label>
                            <input type="text" name="titulo_conteudo_terceiro" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->titulo_conteudo_terceiro) ? $pagina->titulo_conteudo_terceiro : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">Descrição Conteudo Terceiro</label>
                            <input type="text" name="descricao_conteudo_terceiro" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->descricao_conteudo_terceiro) ? $pagina->descricao_conteudo_terceiro : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group text-right m-b-0">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                Atualizar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection