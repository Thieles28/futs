@extends('layouts.dash')
@section('content')
    <div class="content">
        <div class="container">
            <div class="col-sm-6">
                <div class="card-box">

                    <div class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="zmdi zmdi-playstation"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <h4 class="header-title m-t-0 m-b-30">Input groups</h4>

                    <div class="row">
                        <div class="col-md-12">
                            <form role="form">
                                <div class="form-group">
                                    <label class="control-label" for="example-input1-group1">Artilharia</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-trophy"></i></span>
                                        <select class="form-control">
                                            <option class="placeholder">Ranking</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                    <div class="input-group m-t-10">
                                        <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                                        <input type="text" name="jogador" class="form-control" placeholder="Jogador">
                                    </div>
                                    <div class="input-group m-t-10">
                                        <span class="input-group-addon"><i class="fa fa-futbol-o"></i></span>
                                        <input type="text" name="gols" class="form-control" placeholder="Gols">
                                    </div>
                                    <div class="dropify-wrapper" style="margin-top: 15px;">
                                        <input type="file" class="dropify" data-max-file-size="1M" placeholder="Perfil">
                                    </div>
                                    <div class="input-group m-t-10 pull-right">
                                        <button type="button" class="btn btn-primary waves-effect waves-light w-lg m-b-5">Enviar</button>
                                    </div>
                                </div> <!-- form-group -->
                            </form>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card-box">

                    <div class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="zmdi zmdi-playstation"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <h4 class="header-title m-t-0 m-b-30">Input groups</h4>

                    <div class="row">
                        <div class="col-md-12">
                            <form role="form">
                                <div class="form-group">
                                    <label class="control-label" for="example-input1-group1">Jogadores</label>
                                    <div class="input-group m-t-10">
                                        <span class="input-group-addon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                                        <input type="text" name="nome" class="form-control" placeholder="Nome do Jogador">
                                    </div>
                                    <div class="input-group m-t-10">
                                        <span class="input-group-addon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                                        <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome do Jogador">
                                    </div>
                                    <div class="input-group m-t-10">
                                        <span class="input-group-addon"><i class="fa fa-shield fa-lg" aria-hidden="true"></i></span>
                                        <input type="text" name="time" class="form-control" placeholder="Time do Jogador">
                                    </div>
                                    <div class="input-group m-t-10">
                                        <span class="input-group-addon"><i class="fa fa-spinner fa-spin" aria-hidden="true"></i></span>
                                        <input type="text" name="idade" class="form-control" placeholder="Data de Nascimento" data-mask="99/99/9999" maxlength="10" autocomplete="off">
                                    </div>
                                    <div class="input-group m-t-10">
                                        <span class="input-group-addon"><i class="fa fa-address-book-o" aria-hidden="true"></i></span>
                                        <input type="text" name="cidade" class="form-control" placeholder="Cidade do Jogador">
                                    </div>
                                    <div class="input-group m-t-10 pull-right">
                                        <button type="button" class="btn btn-primary waves-effect waves-light w-lg m-b-5">Enviar</button>
                                    </div>
                                </div> <!-- form-group -->
                            </form>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
            </div>
        </div>
    </div>
@endsection