@extends('layouts.dash')
@section('content')
    <div class="content">
        <div class="container">
            @foreach($paginas as $pagina)
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="table-rep-plugin">
                            <div class="table-wrapper">
                                <div class="table-responsive b-0" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table  table-striped display-all focus-on">
                                        <thead>
                                        <tr>
                                            <th id="tech-companies-1-col-0">Id</th>
                                            <th data-priority="1" id="tech-companies-1-col-1">Titulo do Conteudo</th>
                                            <th data-priority="3" id="tech-companies-1-col-2">Descrição do Conteudo</th>
                                            <th data-priority="3" id="tech-companies-1-col-2">Tipo</th>
                                            <th data-priority="4" id="tech-companies-1-col-5">Ação</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th colspan="1" data-columns="tech-companies-1-col-0">{{ $pagina->id }}</th>
                                            <td data-priority="3" colspan="1" data-columns="tech-companies-1-col-2">{{ str_limit($pagina->titulo_conteudo, 30) }}</td>
                                            <td data-priority="3" colspan="1" data-columns="tech-companies-1-col-2">{{ str_limit($pagina->descricao_conteudo, 30) }}</td>
                                            <td data-priority="3" colspan="1" data-columns="tech-companies-1-col-2">{{ str_limit($pagina->tipo, 10) }}</td>
                                            <td class="actions">
                                                <a href="{{ route('editar_conteudo', $pagina->id) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
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