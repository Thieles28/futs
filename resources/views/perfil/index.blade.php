@extends('layouts.dash')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">Títulos</h4>

                        <div class="widget-chart-1">
                            <div class="">
                                <span class="badge badge-warning">35</span>
                                <span class="badge" style="background-color: #87949b">33</span>
                                <span class="badge" style="background-color: darkgoldenrod">32</span>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-lg-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">Vitórias</h4>

                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1">
                                <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#10c469"
                                       data-bgColor="#f05050" value="60"
                                       data-skin="tron" data-angleOffset="180" data-readOnly=true
                                       data-thickness=".15"/>
                            </div>
                            <div class="widget-detail-1">
                                <h2 class="p-t-10 m-b-0"> 60 </h2>
                                <p class="text-muted">Quantidade</p>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-lg-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">Empates</h4>

                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1">
                                <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#CFCFCF"
                                       data-bgColor="#FFE6BA" value="40"
                                       data-skin="tron" data-angleOffset="180" data-readOnly=true
                                       data-thickness=".15"/>
                            </div>
                            <div class="widget-detail-1">
                                <h2 class="p-t-10 m-b-0"> 40 </h2>
                                <p class="text-muted">Quantidade</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">Derrotas</h4>

                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1">
                                <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050"
                                       data-bgColor="#10c469" value="30"
                                       data-skin="tron" data-angleOffset="180" data-readOnly=true
                                       data-thickness=".15"/>
                            </div>
                            <div class="widget-detail-1">
                                <h2 class="p-t-10 m-b-0"> 30 </h2>
                                <p class="text-muted">Quantidade</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



