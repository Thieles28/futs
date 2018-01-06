@extends('layouts.dash')
@section('content')
    <div class="content">
        <div class="container">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Editar Páginas</h4>
                    <form action="{{ route('atualizar_patrocinio', $pagina->id) }}" method="post" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input class="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="userName">Titulo Patrocínio</label>
                            <input type="text" name="titulo_patrocinio" placeholder="Entre com seu titulo"
                                   value="{{ isset($pagina->titulo_patrocinio) ? $pagina->titulo_patrocinio : '' }}" class="form-control"
                                   id="userName" data-parsley-id="4" required autofocus>
                        </div>
                        <div class="form-group">
                            <h4 class="header-title m-t-0 m-b-30">Imagem Patrocínio Primeiro*</h4>
                            @if(isset($pagina->imagem_patrocinio_um))
                                <div class="dropify-wrapper" style="height: 315px;">
                                    <div class="dropify-message"><span class="file-icon"></span>
                                        <p>Drag and drop a file here or click</p>
                                        <p class="dropify-error">Ooops, something wrong appended.</p></div>
                                    <div class="dropify-loader" style="display: none;"></div>
                                    <div class="dropify-errors-container">
                                        <ul></ul>
                                    </div>
                                    <input type="file" name="imagem_patrocinio_um" value="{{ asset($pagina->imagem_patrocinio_um) }}" class="dropify" data-height="300">
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
                            <h4 class="header-title m-t-0 m-b-30">Imagem Patrocínio Segundo*</h4>
                            @if(isset($pagina->imagem_patrocinio_dois))
                                <div class="dropify-wrapper" style="height: 315px;">
                                    <div class="dropify-message"><span class="file-icon"></span>
                                        <p>Drag and drop a file here or click</p>
                                        <p class="dropify-error">Ooops, something wrong appended.</p></div>
                                    <div class="dropify-loader" style="display: none;"></div>
                                    <div class="dropify-errors-container">
                                        <ul></ul>
                                    </div>
                                    <input type="file" name="imagem_patrocinio_dois" value="{{ asset($pagina->imagem_patrocinio_dois) }}" class="dropify" data-height="300">
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
                            <h4 class="header-title m-t-0 m-b-30">Imagem Patrocínio Terceiro*</h4>
                            @if(isset($pagina->imagem_patrocinio_tres))
                                <div class="dropify-wrapper" style="height: 315px;">
                                    <div class="dropify-message"><span class="file-icon"></span>
                                        <p>Drag and drop a file here or click</p>
                                        <p class="dropify-error">Ooops, something wrong appended.</p></div>
                                    <div class="dropify-loader" style="display: none;"></div>
                                    <div class="dropify-errors-container">
                                        <ul></ul>
                                    </div>
                                    <input type="file" name="imagem_patrocinio_tres" value="{{ asset($pagina->imagem_patrocinio_tres) }}" class="dropify" data-height="300">
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
                            <h4 class="header-title m-t-0 m-b-30">Imagem Patrocínio Quarto*</h4>
                            @if(isset($pagina->imagem_patrocinio_quatro))
                                <div class="dropify-wrapper" style="height: 315px;">
                                    <div class="dropify-message"><span class="file-icon"></span>
                                        <p>Drag and drop a file here or click</p>
                                        <p class="dropify-error">Ooops, something wrong appended.</p></div>
                                    <div class="dropify-loader" style="display: none;"></div>
                                    <div class="dropify-errors-container">
                                        <ul></ul>
                                    </div>
                                    <input type="file" name="imagem_patrocinio_quatro" value="{{ asset($pagina->imagem_patrocinio_quatro) }}" class="dropify" data-height="300">
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
                            <h4 class="header-title m-t-0 m-b-30">Imagem Patrocínio Quinto*</h4>
                            @if(isset($pagina->imagem_patrocinio_cinco))
                                <div class="dropify-wrapper" style="height: 315px;">
                                    <div class="dropify-message"><span class="file-icon"></span>
                                        <p>Drag and drop a file here or click</p>
                                        <p class="dropify-error">Ooops, something wrong appended.</p></div>
                                    <div class="dropify-loader" style="display: none;"></div>
                                    <div class="dropify-errors-container">
                                        <ul></ul>
                                    </div>
                                    <input type="file" name="imagem_patrocinio_cinco" value="{{ asset($pagina->imagem_patrocinio_cinco) }}" class="dropify" data-height="300">
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
                            <h4 class="header-title m-t-0 m-b-30">Imagem Patrocínio Sexto*</h4>
                            @if(isset($pagina->imagem_patrocinio_seis))
                                <div class="dropify-wrapper" style="height: 315px;">
                                    <div class="dropify-message"><span class="file-icon"></span>
                                        <p>Drag and drop a file here or click</p>
                                        <p class="dropify-error">Ooops, something wrong appended.</p></div>
                                    <div class="dropify-loader" style="display: none;"></div>
                                    <div class="dropify-errors-container">
                                        <ul></ul>
                                    </div>
                                    <input type="file" name="imagem_patrocinio_seis" value="{{ asset($pagina->imagem_patrocinio_seis) }}" class="dropify" data-height="300">
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