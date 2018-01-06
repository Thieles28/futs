@extends('layouts.dash')
@section('content')
    <div class="content">
        <div class="container">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Editar Páginas</h4>
                    <form action="{{ route('atualizar_slider', $pagina->id) }}" method="post" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input class="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="userName">Titulo Slider Primeiro</label>
                            <input type="text" name="titulo_slider_um" placeholder="Entre com seu titulo"
                                   value="{{ isset($pagina->titulo_slider_um) ? $pagina->titulo_slider_um : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="userName">Titulo Slider Segundo</label>
                            <input type="text" name="titulo_slider_dois" placeholder="Entre com seu titulo"
                                   value="{{ isset($pagina->titulo_slider_dois) ? $pagina->titulo_slider_dois : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="userName">Titulo Slider Terceiro</label>
                            <input type="text" name="titulo_slider_tres" placeholder="Entre com seu titulo"
                                   value="{{ isset($pagina->titulo_slider_tres) ? $pagina->titulo_slider_tres : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="userName">Titulo Primeiro Site</label>
                            <input type="text" name="titulo_um" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->titulo_um) ? $pagina->titulo_um : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">Descrição Primeiro Site</label>
                            <input type="text" name="descricao_um" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->descricao_um) ? $pagina->descricao_um : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">Titulo Segunto Site</label>
                            <input type="text" name="titulo_dois" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->titulo_dois) ? $pagina->titulo_dois : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">Descricao Segunto Site</label>
                            <input type="text" name="descricao_dois" placeholder="Entre com seu subtitulo"
                                   value="{{ isset($pagina->descricao_dois) ? $pagina->descricao_dois : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required>
                        </div>
                        <div class="form-group">
                            <h4 class="header-title m-t-0 m-b-30">Imagem Slider Primeiro*</h4>
                            @if(isset($pagina->imagem_slider_um))
                                <div class="dropify-wrapper" style="height: 315px;">
                                    <div class="dropify-message"><span class="file-icon"></span>
                                        <p>Drag and drop a file here or click</p>
                                        <p class="dropify-error">Ooops, something wrong appended.</p></div>
                                    <div class="dropify-loader" style="display: none;"></div>
                                    <div class="dropify-errors-container">
                                        <ul></ul>
                                    </div>
                                    <input type="file" name="imagem_slider_um" value="{{ asset($pagina->imagem_slider_um) }}" class="dropify" data-height="300">
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
                            <h4 class="header-title m-t-0 m-b-30">Imagem Slider Segundo*</h4>
                            @if(isset($pagina->imagem_slider_dois))
                                <div class="dropify-wrapper" style="height: 315px;">
                                    <div class="dropify-message"><span class="file-icon"></span>
                                        <p>Drag and drop a file here or click</p>
                                        <p class="dropify-error">Ooops, something wrong appended.</p></div>
                                    <div class="dropify-loader" style="display: none;"></div>
                                    <div class="dropify-errors-container">
                                        <ul></ul>
                                    </div>
                                    <input type="file" name="imagem_slider_dois" value="{{ asset($pagina->imagem_slider_dois) }}" class="dropify" data-height="300">
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
                            <h4 class="header-title m-t-0 m-b-30">Imagem Slider Terceiro*</h4>
                            @if(isset($pagina->imagem_slider_tres))
                                <div class="dropify-wrapper" style="height: 315px;">
                                    <div class="dropify-message"><span class="file-icon"></span>
                                        <p>Drag and drop a file here or click</p>
                                        <p class="dropify-error">Ooops, something wrong appended.</p></div>
                                    <div class="dropify-loader" style="display: none;"></div>
                                    <div class="dropify-errors-container">
                                        <ul></ul>
                                    </div>
                                    <input type="file" name="imagem_slider_tres" value="{{ asset($pagina->imagem_slider_tres) }}" class="dropify" data-height="300">
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