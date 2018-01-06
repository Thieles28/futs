@extends('layouts.dash')
@section('content')
    <div class="content">
        <div class="container">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Editar Páginas</h4>
                    <form action="{{ route('atualizar_artilharia', $pagina->id) }}" method="post" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input class="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="userName">Titulo Artilharia</label>
                            <input type="text" name="titulo_artilharia" placeholder="Entre com seu titulo"
                                   value="{{ isset($pagina->titulo_artilharia) ? $pagina->titulo_artilharia : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="userName">Titulo Imagem Primeiro</label>
                            <input type="text" name="titulo_imagem_um" placeholder="Entre com seu titulo"
                                   value="{{ isset($pagina->titulo_imagem_um) ? $pagina->titulo_imagem_um : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="userName">Subtitulo Imagem Primeiro</label>
                            <input type="text" name="subtitulo_imagem_um" placeholder="Entre com seu titulo"
                                   value="{{ isset($pagina->subtitulo_imagem_um) ? $pagina->subtitulo_imagem_um : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="userName">Descrição Imagem Primeiro</label>
                            <input type="text" name="descricao_imagem_um" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->descricao_imagem_um) ? $pagina->descricao_imagem_um : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">URL Imagem Primerio</label>
                            <input type="text" name="link_imagem_um" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->link_imagem_um) ? $pagina->link_imagem_um : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">Titulo Link Primerio</label>
                            <input type="text" name="titulo_link_um" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->titulo_link_um) ? $pagina->titulo_link_um : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">Titulo Imagem Segundo</label>
                            <input type="text" name="titulo_imagem_dois" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->titulo_imagem_dois) ? $pagina->titulo_imagem_dois : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">Subtitulo Imagem Segundo</label>
                            <input type="text" name="subtitulo_imagem_dois" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->subtitulo_imagem_dois) ? $pagina->subtitulo_imagem_dois : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">Descrição Imagem Segundo</label>
                            <input type="text" name="descricao_imagem_dois" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->descricao_imagem_dois) ? $pagina->descricao_imagem_dois : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">URL Imagem Segundo</label>
                            <input type="text" name="link_imagem_dois" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->link_imagem_dois) ? $pagina->link_imagem_dois : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">Titulo Link Segundo</label>
                            <input type="text" name="titulo_link_dois" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->titulo_link_dois) ? $pagina->titulo_link_dois : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">Titulo Imagem Terceira</label>
                            <input type="text" name="titulo_imagem_tres" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->titulo_imagem_tres) ? $pagina->titulo_imagem_tres : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">Subtitulo Imagem Terceira</label>
                            <input type="text" name="subtitulo_imagem_tres" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->subtitulo_imagem_tres) ? $pagina->subtitulo_imagem_tres : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">Descrição Imagem Terceira</label>
                            <input type="text" name="descricao_imagem_tres" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->descricao_imagem_tres) ? $pagina->descricao_imagem_tres : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">URL Imagem Terceira</label>
                            <input type="text" name="link_imagem_tres" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->link_imagem_tres) ? $pagina->link_imagem_tres : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">Titulo Link Terceiro</label>
                            <input type="text" name="titulo_link_tres" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->titulo_link_tres) ? $pagina->titulo_link_tres : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <h4 class="header-title m-t-0 m-b-30">Imagem Artilharia Primeiro*</h4>
                            @if(isset($pagina->imagem_artilharia_um))
                                <div class="dropify-wrapper" style="height: 315px;">
                                    <div class="dropify-message"><span class="file-icon"></span>
                                        <p>Drag and drop a file here or click</p>
                                        <p class="dropify-error">Ooops, something wrong appended.</p></div>
                                    <div class="dropify-loader" style="display: none;"></div>
                                    <div class="dropify-errors-container">
                                        <ul></ul>
                                    </div>
                                    <input type="file" name="imagem_artilharia_um" value="{{ asset($pagina->imagem_artilharia_um) }}" class="dropify" data-height="300">
                                    <button type="button" class="dropify-clear">Remove</button>
                                    <div class="dropify-preview" style="display: none;"><span class="dropify-render"></span>
                                        <div class="dropify-infos">
                                            <div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span
                                                            class="dropify-filename-inner">881644.jpg</span></p>
                                                <p class="dropify-infos-message">Drag and drop or click to replace</p></div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <h4 class="header-title m-t-0 m-b-30">Imagem Artilharia Segundo*</h4>
                            @if(isset($pagina->imagem_artilharia_dois))
                                <div class="dropify-wrapper" style="height: 315px;">
                                    <div class="dropify-message"><span class="file-icon"></span>
                                        <p>Drag and drop a file here or click</p>
                                        <p class="dropify-error">Ooops, something wrong appended.</p></div>
                                    <div class="dropify-loader" style="display: none;"></div>
                                    <div class="dropify-errors-container">
                                        <ul></ul>
                                    </div>
                                    <input type="file" name="imagem_artilharia_dois" value="{{ asset($pagina->imagem_artilharia_dois) }}" class="dropify" data-height="300">
                                    <button type="button" class="dropify-clear">Remove</button>
                                    <div class="dropify-preview" style="display: none;"><span class="dropify-render"></span>
                                        <div class="dropify-infos">
                                            <div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span
                                                            class="dropify-filename-inner">881644.jpg</span></p>
                                                <p class="dropify-infos-message">Drag and drop or click to replace</p></div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <h4 class="header-title m-t-0 m-b-30">Imagem Artilharia Terceiro*</h4>
                            @if(isset($pagina->imagem_artilharia_tres))
                                <div class="dropify-wrapper" style="height: 315px;">
                                    <div class="dropify-message"><span class="file-icon"></span>
                                        <p>Drag and drop a file here or click</p>
                                        <p class="dropify-error">Ooops, something wrong appended.</p></div>
                                    <div class="dropify-loader" style="display: none;"></div>
                                    <div class="dropify-errors-container">
                                        <ul></ul>
                                    </div>
                                    <input type="file" name="imagem_artilharia_tres" value="{{ asset($pagina->imagem_artilharia_tres) }}" class="dropify" data-height="300">
                                    <button type="button" class="dropify-clear">Remove</button>
                                    <div class="dropify-preview" style="display: none;"><span class="dropify-render"></span>
                                        <div class="dropify-infos">
                                            <div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span
                                                            class="dropify-filename-inner">881644.jpg</span></p>
                                                <p class="dropify-infos-message">Drag and drop or click to replace</p></div>
                                        </div>
                                    </div>
                                </div>
                            @endif
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