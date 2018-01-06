<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Futs</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/material-kit.css') }}" rel="stylesheet">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet">

</head>

<body class="index-page">
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#">
                <div class="logo-container">
                    <div class="logo">
                        <img src="{{ asset($pagina_topo->logo) }}" alt="Creative Tim Logo" rel="tooltip" title="<b>Futs </b> Venha fazer parte dessa equipe!" data-placement="bottom" data-html="true">
                    </div>
                </div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-index">
            <ul class="nav navbar-nav navbar-right">
                @if(Route::has('login'))
                <li>
                    @auth
                    <a href="{{ url('/home') }}" target="_blank">
                        <i class="material-icons">dashboard</i> Início
                    </a>
                </li>
                <li>
                    @else
                    <a href="{{ route('login') }}">
                        <i class="material-icons">dashboard</i> Entrar
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}">
                        <i class="material-icons">unarchive</i> Registrar
                    </a>
                    @endauth
                </li>
                @endif
                <li>
                    <a rel="tooltip" title="Siga-nos no Twitter" data-placement="bottom" href="#" target="_blank" class="btn btn-white btn-simple btn-just-icon">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a rel="tooltip" title="Curta-nos no Facebook" data-placement="bottom" href="#" target="_blank" class="btn btn-white btn-simple btn-just-icon">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a rel="tooltip" title="Siga-nos no Instagram" data-placement="bottom" href="#" target="_blank" class="btn btn-white btn-simple btn-just-icon">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<div class="wrapper">
    <div class="header header-filter" style="background-image: url({{ $pagina_topo->imagem }});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="brand">
                        <h1>{{ $pagina_topo->titulo }}</h1>
                        <h3>{{ $pagina_topo->subtitulo }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="section" id="carousel">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Carousel Card -->
                        <div class="card card-raised card-carousel">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <div class="carousel slide" data-ride="carousel">

                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="{{ asset($pagina_slider->imagem_slider_um) }}" alt="Awesome Image">
                                            <div class="carousel-caption">
                                                <h4><i class="material-icons">location_on</i>{{ $pagina_slider->titulo_slider_um }}</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="{{ asset($pagina_slider->imagem_slider_dois) }}" alt="Awesome Image">
                                            <div class="carousel-caption">
                                                <h4><i class="material-icons">location_on</i> {{ $pagina_slider->titulo_slider_dois }}</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="{{ asset($pagina_slider->imagem_slider_tres) }}" alt="Awesome Image">
                                            <div class="carousel-caption">
                                                <h4><i class="material-icons">location_on</i> {{ $pagina_slider->titulo_slider_dois }}</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                        <i class="material-icons">keyboard_arrow_left</i>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                        <i class="material-icons">keyboard_arrow_right</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Carousel Card -->

                    </div>
                </div>
            </div>
        </div>

        <div class="section section-download">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>{{ $pagina_slider->titulo_um }}</h2>
                        <h4>{{ $pagina_slider->descricao_um }}</h4>
                    </div>
                </div>

                <br><br>

                <div class="row text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>{{ $pagina_slider->titulo_dois }}</h2>
                        <h4>{{ $pagina_slider->descricao_dois }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-tabs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Tabs with icons on Card -->
                        <div class="card card-nav-tabs">
                            <div class="header header-success">
                                <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                            <li class="active">
                                                <a href="#profile" data-toggle="tab">
                                                    <i class="material-icons">visibility</i>
                                                    Tabela
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#messages" data-toggle="tab">
                                                    <i class="material-icons">chat</i>
                                                    Artilharia
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#settings" data-toggle="tab">
                                                    <i class="material-icons">call_missed_outgoing</i>
                                                    Rodadas
                                                </a>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="tab-content text-center">
                                    <div class="tab-pane active table-responsive" id="profile">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Classificação</th>
                                                <th class="text-center">P</th>
                                                <th class="text-center">J</th>
                                                <th class="text-center">V</th>
                                                <th class="text-center">E</th>
                                                <th class="text-center">D</th>
                                                <th class="text-center">GP</th>
                                                <th class="text-center">GC</th>
                                                <th class="text-center">SG</th>
                                                <th class="text-center">%</th>
                                                <th class="text-left">ÚLT.JOGOS</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Flamengo</td>
                                                <td>71</td>
                                                <td>31</td>
                                                <td>21</td>
                                                <td>8</td>
                                                <td>6</td>
                                                <td>48</td>
                                                <td>24</td>
                                                <td>24</td>
                                                <td>67.6</td>
                                                <td class="td-actions text-right">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success" style="width: 35%">
                                                            <span class="sr-only">35% Complete (success)</span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-warning" style="width: 20%">
                                                            <span class="sr-only">20% Complete (warning)</span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-danger" style="width: 10%">
                                                            <span class="sr-only">10% Complete (danger)</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>São Paulo</td>
                                                <td>71</td>
                                                <td>31</td>
                                                <td>21</td>
                                                <td>8</td>
                                                <td>6</td>
                                                <td>48</td>
                                                <td>24</td>
                                                <td>24</td>
                                                <td>67.6</td>
                                                <td class="td-actions text-right">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success" style="width: 35%">
                                                            <span class="sr-only">35% Complete (success)</span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-warning" style="width: 20%">
                                                            <span class="sr-only">20% Complete (warning)</span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-danger" style="width: 10%">
                                                            <span class="sr-only">10% Complete (danger)</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Botafogo</td>
                                                <td>71</td>
                                                <td>31</td>
                                                <td>21</td>
                                                <td>8</td>
                                                <td>6</td>
                                                <td>48</td>
                                                <td>24</td>
                                                <td>24</td>
                                                <td>67.6</td>
                                                <td class="td-actions text-right">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success" style="width: 35%">
                                                            <span class="sr-only">35% Complete (success)</span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-warning" style="width: 20%">
                                                            <span class="sr-only">20% Complete (warning)</span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-danger" style="width: 10%">
                                                            <span class="sr-only">10% Complete (danger)</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Corinthians</td>
                                                <td>71</td>
                                                <td>31</td>
                                                <td>21</td>
                                                <td>8</td>
                                                <td>6</td>
                                                <td>48</td>
                                                <td>24</td>
                                                <td>24</td>
                                                <td>67.6</td>
                                                <td class="td-actions text-right">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success" style="width: 35%">
                                                            <span class="sr-only">35% Complete (success)</span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-warning" style="width: 20%">
                                                            <span class="sr-only">20% Complete (warning)</span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-danger" style="width: 10%">
                                                            <span class="sr-only">10% Complete (danger)</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="messages">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="text-center">Ranking</th>
                                                <th class="text-center">Perfil</th>
                                                <th class="text-center">Jogador</th>
                                                <th class="text-center">Gols</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td><img src="{{ asset('img/avatarmini.jpg') }}" alt="Thumbnail Image" class="img-raised img-circle"></td>
                                                <td>Vinicius Junior</td>
                                                <td>18</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td><img src="{{ asset('img/avatarmini.jpg') }}" alt="Thumbnail Image" class="img-raised img-circle"></td>
                                                <td>Jô</td>
                                                <td>15</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td><img src="{{ asset('img/avatarmini.jpg') }}" alt="Thumbnail Image" class="img-raised img-circle"></td>
                                                <td>Dyego</td>
                                                <td>13</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td><img src="{{ asset('img/avatarmini.jpg') }}" alt="Thumbnail Image" class="img-raised img-circle"></td>
                                                <td>Everton</td>
                                                <td>11</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="settings">
                                        <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tabs with icons on Card -->
                    </div>

                    <div class="col-md-12">
                        <!-- Tabs on Plain Card -->
                        <div class="card card-nav-tabs card-plain">
                            <div class="header header-danger">
                                <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                            <li class="active"><a href="#home" data-toggle="tab">Inicio</a></li>
                                            <li><a href="#updates" data-toggle="tab">Atualização</a></li>
                                            <li><a href="#history" data-toggle="tab">Historia</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="tab-content text-center">
                                    <div class="tab-pane active" id="home">
                                        <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                                    </div>
                                    <div class="tab-pane" id="updates">
                                        <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                                    </div>
                                    <div class="tab-pane" id="history">
                                        <p> I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tabs on plain Card -->
                    </div>

                </div>
            </div>
        </div>
        <!-- End Section Tabs -->

        <div class="container">
            <div class="section text-center section-landing">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">{{ $pagina_conteudo->titulo_conteudo }}</h2>
                        <h5 class="description">{{ $pagina_conteudo->descricao_conteudo }}</h5>
                    </div>
                </div>

                <div class="features">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-primary">
                                    <i class="material-icons">chat</i>
                                </div>
                                <h4 class="info-title">{{ $pagina_conteudo->titulo_conteudo_primeiro }}</h4>
                                <p>{{ $pagina_conteudo->descricao_conteudo_primeiro }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="material-icons">verified_user</i>
                                </div>
                                <h4 class="info-title">{{ $pagina_conteudo->titulo_conteudo_segundo }}</h4>
                                <p>{{ $pagina_conteudo->descricao_conteudo_segundo }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="material-icons">fingerprint</i>
                                </div>
                                <h4 class="info-title">{{ $pagina_conteudo->titulo_conteudo_terceiro }}</h4>
                                <p>{{ $pagina_conteudo->descricao_conteudo_terceiro }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section text-center">
                <h2 class="title">{{$pagina_artilharia->titulo_artilharia}}</h2>

                <div class="team">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="{{ asset($pagina_artilharia->imagem_artilharia_um) }}" alt="Thumbnail Image" class="img-raised img-circle">
                                <h4 class="title">{{$pagina_artilharia->titulo_imagem_um}}<br />
                                    <small class="text-muted">{{ $pagina_artilharia->subtitulo_imagem_um }}</small>
                                </h4>
                                <p class="description">{{ $pagina_artilharia->descricao_imagem_um }} <a href="{{$pagina_artilharia->link_imagem_um}}">{{$pagina_artilharia->titulo_link_um}}</a></p>
                                <a href="#" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="{{ asset($pagina_artilharia->imagem_artilharia_dois) }}" alt="Thumbnail Image" class="img-raised img-circle">
                                <h4 class="title">{{$pagina_artilharia->titulo_imagem_dois}}<br />
                                    <small class="text-muted">{{$pagina_artilharia->subtitulo_imagem_dois}}</small>
                                </h4>
                                <p class="description">{{ $pagina_artilharia->descricao_imagem_dois }} <a href="{{ $pagina_artilharia->link_imagem_dois }}">{{ $pagina_artilharia->titulo_link_dois }}</a></p>
                                <a href="#" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="btn btn-simple btn-just-icon"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="{{ asset($pagina_artilharia->imagem_artilharia_tres) }}" alt="Thumbnail Image" class="img-raised img-circle">
                                <h4 class="title">{{ $pagina_artilharia->titulo_imagem_tres }}<br />
                                    <small class="text-muted">{{ $pagina_artilharia->subtitulo_imagem_tres }}</small>
                                </h4>
                                <p>{{ $pagina_artilharia->descricao_imagem_tres }} <a href="{{ $pagina_artilharia->link_imagem_tres }}">{{ $pagina_artilharia->titulo_link_um }}</a></p>
                                <a href="#" class="btn btn-simple btn-just-icon"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="btn btn-simple btn-just-icon"><i class="fa fa-youtube-play"></i></a>
                                <a href="#" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Patrocinio do Site -->
            <div class="section text-center">
                <h2 class="title">{{ $pagina_patrocinio->titulo_patrocinio }}</h2>
                <div class="team">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="wpb_single_image wpb_content_element vc_align_center">
                                <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                class="vc_single_image-img "
                                                src="{{ $pagina_patrocinio->imagem_patrocinio_um }}"
                                                width="200" height="100"
                                                alt="client-5"
                                                title="client-5"/></div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wpb_single_image wpb_content_element vc_align_center">
                                <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                class="vc_single_image-img "
                                                src="{{ $pagina_patrocinio->imagem_patrocinio_dois }}"
                                                width="200" height="100"
                                                alt="client-4"
                                                title="client-4"/></div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wpb_single_image wpb_content_element vc_align_center">
                                <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper vc_box_border_grey"><img
                                                class="vc_single_image-img "
                                                src="{{ $pagina_patrocinio->imagem_patrocinio_tres }}"
                                                width="200" height="100"
                                                alt="client-1"
                                                title="client-1"/></div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wpb_single_image wpb_content_element vc_align_center">
                                <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper vc_box_border_grey"><img
                                                class="vc_single_image-img "
                                                src="{{ $pagina_patrocinio->imagem_patrocinio_quatro }}"
                                                width="200" height="100"
                                                alt="client-3"
                                                title="client-3"/></div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wpb_single_image wpb_content_element vc_align_center">

                                <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper vc_box_border_grey"><img
                                                class="vc_single_image-img "
                                                src="{{ $pagina_patrocinio->imagem_patrocinio_cinco }}"
                                                width="200" height="100"
                                                alt="client-6"
                                                title="client-6"/></div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wpb_single_image wpb_content_element vc_align_center">
                                <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper vc_box_border_grey"><img
                                                class="vc_single_image-img "
                                                src="{{ $pagina_patrocinio->imagem_patrocinio_seis }}"
                                                width="200" height="100"
                                                alt="client-2"
                                                title="client-2"/></div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fim patrocinio do Site -->
            <div class="section landing-section">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-center title">Entre em Contato</h2>
                        <!--<h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.</h4>-->
                        <form class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Seu Nome</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Seu E-mail</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group label-floating">
                                <label class="control-label">Sua Mensagem</label>
                                <textarea class="form-control" rows="4"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 text-center">
                                    <button class="btn btn-primary btn-raised">
                                        Enviar Mensagem
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="space-50"></div>
    </div>

    <footer class="footer">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="#">
                            TMR TECNOLOGIA
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Sobre nós
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                &copy; 2017 Todos os direitos reservado FUTS.
            </div>
        </div>
    </footer>
</div>

<!-- Sart Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-simple">Nice Button</button>
                <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--  End Modal -->

</body>
<!-- Scripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/material.min.js') }}"></script>
<script src="{{ asset('js/nouislider.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/material-kit.js') }}"></script>

<script type="text/javascript">

    $().ready(function(){
        // the body of this function is in assets/material-kit.js
        materialKit.initSliders();
        window_width = $(window).width();

        if (window_width >= 992){
            big_image = $('.wrapper > .header');

            $(window).on('scroll', materialKitDemo.checkScrollForParallax);
        }

    });
</script>
</html>
