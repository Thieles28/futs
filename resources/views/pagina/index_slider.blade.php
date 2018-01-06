@extends('layouts.dash')
@section('content')
    <div class="content">
        <div class="container">
            @foreach($paginas as $pagina)
                <div class="col-sm-4">
                    <div class="card-box widget-user">
                        <div>
                            <img src="{{ asset($pagina->imagem_slider_um) }}" class="img-thumbnail" alt="profile-image">
                            <div class="wid-u-info">
                                <small class="text-custom pull-right"><b>Imagem Slider Primeiro</b></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-box widget-user">
                        <div>
                            <img src="{{ asset($pagina->imagem_slider_dois) }}" class="img-thumbnail" alt="profile-image">
                            <div class="wid-u-info">
                                <small class="text-success pull-right"><b>Imagem Slider Segundo</b></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-box widget-user">
                        <div>
                            <img src="{{ asset($pagina->imagem_slider_tres) }}" class="img-thumbnail" alt="profile-image">
                            <div class="wid-u-info">
                                <small class="text-warning pull-right"><b>Imagem Slider Terceira</b></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="table-rep-plugin">
                            <div class="table-wrapper">
                                <div class="table-responsive b-0" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table  table-striped display-all focus-on">
                                        <thead>
                                        <tr>
                                            <th id="tech-companies-1-col-0">Id</th>
                                            <th data-priority="1" id="tech-companies-1-col-1">Titulo do Slider</th>
                                            <th data-priority="3" id="tech-companies-1-col-2">Titulo Primeiro</th>
                                            <th data-priority="3" id="tech-companies-1-col-2">Descrição Primeiro</th>
                                            <th data-priority="3" id="tech-companies-1-col-2">Titulo Segundo</th>
                                            <th data-priority="3" id="tech-companies-1-col-2">Descrição Segundo</th>
                                            <th data-priority="3" id="tech-companies-1-col-2">Tipo</th>
                                            <th data-priority="4" id="tech-companies-1-col-5">Ação</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th colspan="1" data-columns="tech-companies-1-col-0">{{ $pagina->id }}</th>
                                            <td data-priority="1" colspan="1" data-columns="tech-companies-1-col-1">{{ str_limit($pagina->titulo_slider, 25) }}</td>
                                            <td data-priority="3" colspan="1" data-columns="tech-companies-1-col-2">{{ str_limit($pagina->titulo_um, 25) }}</td>
                                            <td data-priority="3" colspan="1" data-columns="tech-companies-1-col-2">{{ str_limit($pagina->descricao_um, 25) }}</td>
                                            <td data-priority="3" colspan="1" data-columns="tech-companies-1-col-2">{{ str_limit($pagina->titulo_dois, 25) }}</td>
                                            <td data-priority="3" colspan="1" data-columns="tech-companies-1-col-2">{{ str_limit($pagina->descricao_dois, 25) }}</td>
                                            <td data-priority="3" colspan="1" data-columns="tech-companies-1-col-2">{{ str_limit($pagina->tipo, 10) }}</td>
                                            <td class="actions">
                                                <a href="{{ route('editar_slider', $pagina->id) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @if(session()->has('msg'))
                            <div class="alert alert-success" role="alert">{{ session('msg') }}</div>
                        @endif
                    </div>
                </div>
        </div>
    </div>
@endsection