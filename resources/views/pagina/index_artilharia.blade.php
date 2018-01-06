@extends('layouts.dash')
@section('content')
    <div class="content">
        <div class="container">
            @foreach($paginas as $pagina)
                <div class="col-sm-4">
                    <div class="card-box widget-user">
                        <div>
                            <img src="{{ asset($pagina->imagem_artilharia_um) }}" class="img-thumbnail" alt="profile-image">
                            <div class="wid-u-info">
                                <small class="text-custom pull-right"><b>Imagem Artilharia Primeiro</b></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-box widget-user">
                        <div>
                            <img src="{{ asset($pagina->imagem_artilharia_dois) }}" class="img-thumbnail" alt="profile-image">
                            <div class="wid-u-info">
                                <small class="text-success pull-right"><b>Imagem Artilharia Segundo</b></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-box widget-user">
                        <div>
                            <img src="{{ asset($pagina->imagem_artilharia_tres) }}" class="img-thumbnail" alt="profile-image">
                            <div class="wid-u-info">
                                <small class="text-warning pull-right"><b>Imagem Artilharia Terceira</b></small>
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
                                            <th data-priority="1" id="tech-companies-1-col-1">Titulo da Artilharia</th>
                                            <th data-priority="3" id="tech-companies-1-col-2">Titulo da Imagem Primeira</th>
                                            <th data-priority="3" id="tech-companies-1-col-2">Titulo da Imagem Segundo</th>
                                            <th data-priority="3" id="tech-companies-1-col-2">Titulo da Imagem Terceira</th>
                                            <th data-priority="3" id="tech-companies-1-col-2">Tipo</th>
                                            <th data-priority="4" id="tech-companies-1-col-5">Ação</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th colspan="1" data-columns="tech-companies-1-col-0">{{ $pagina->id }}</th>
                                            <td data-priority="1" colspan="1" data-columns="tech-companies-1-col-1">{{ str_limit($pagina->titulo_artilharia, 25) }}</td>
                                            <td data-priority="3" colspan="1" data-columns="tech-companies-1-col-2">{{ str_limit($pagina->titulo_imagem_um, 25) }}</td>
                                            <td data-priority="3" colspan="1" data-columns="tech-companies-1-col-2">{{ str_limit($pagina->titulo_imagem_dois, 25) }}</td>
                                            <td data-priority="3" colspan="1" data-columns="tech-companies-1-col-2">{{ str_limit($pagina->titulo_imagem_tres, 25) }}</td>
                                            <td data-priority="3" colspan="1" data-columns="tech-companies-1-col-2">{{ str_limit($pagina->tipo, 10) }}</td>
                                            <td class="actions">
                                                <a href="{{ route('editar_artilharia', $pagina->id) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
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