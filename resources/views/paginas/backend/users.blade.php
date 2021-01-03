@extends ('layouts.backend.admin')
@section('title', 'Dashboard')
@section('content')
<nav aria-label="breadcrumb bread">
    <ol class="breadcrumb breadcrumb-inverse">
        <li class="breadcrumb-item"><a href="{{ route('admin_dashboard')}}">Admin</a></li>
        <li class="breadcrumb-item active" aria-current="page">Utilizadores</li>
    </ol>
</nav>
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">{{$total_users_utls_12meses}}</h2>
                        <p>Novos Registos (Ultimos 12 Meses)</p>
                        <div class="mudargraf">
                            <input type="checkbox" href="#" class="menu-open" name="menu-open" id="usersmenu-open" />
                            <label class="menu-open-button" for="usersmenu-open">
                                <span class="lines line-1"></span>
                                <span class="lines line-2"></span>
                                <span class="lines line-3"></span>
                            </label>
                            <button title="Barras" value="bar" onclick="updateusersChartType()" class="menu-item barras"><i id="baricon" class="fa fa-chart-bar"></i></button>
                            <button title="Linhas" value="line" onclick="updateusersChartType()" class="menu-item linhas"><i id="lineicon" class="fa fa-area-chart"></i></button>
                            <button title="Torta" value="pie" onclick="updateusersChartType()" class="menu-item torta"><i id="pieicon" class="fas fa-chart-pie"></i></button>
                            <button title="Doughnut" value="doughnut" onclick="updateusersChartType()" class="menu-item donut"><i id="doughnuticon" class="far fa-dot-circle"></i></button>
                        </div>
                        <div class="chartjs-wrapper">
                            <canvas id="usersgrafico"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">Géneros</h2>
                        <p>Géneros dos Utilizadores</p>
                        <div class="mudargraf">
                            <input type="checkbox" href="#" class="menu-open" name="menu-open" id="produtoresmenu-open" />
                            <label class="menu-open-button" for="produtoresmenu-open">
                                <span class="lines line-1"></span>
                                <span class="lines line-2"></span>
                                <span class="lines line-3"></span>
                            </label>
                            <button title="Barras" value="bar" onclick="updategenerosChartType()" class="menu-item barras"><i id="baricon" class="fa fa-chart-bar"></i></button>
                            <button title="Linhas" value="line" onclick="updategenerosChartType()" class="menu-item linhas"><i id="lineicon" class="fa fa-area-chart"></i></button>
                            <button title="Torta" value="pie" onclick="updategenerosChartType()" class="menu-item torta"><i id="pieicon" class="fas fa-chart-pie"></i></button>
                            <button title="Doughnut" value="doughnut" onclick="updategenerosChartType()" class="menu-item donut"><i id="doughnuticon" class="far fa-dot-circle"></i></button>
                        </div>
                        <div class="chartjs-wrapper">
                            <canvas id="generosgradfico"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <h2 class="titulo">Tabelas</h2>
        <div class="row tabelas">
            <div class="col-12">
                <div class="card card-table-border-none" id="users">
                    <div class="card-header justify-content-between">
                        <h2 id="titulotable">Tabela de Utilizadores</h2>
                        <div class="table-real-menu-rep">
                            <button title="Utilizadores" id="btnusers" value="Utilizadores" class="table-menu-item-repos"> <i id="table-users" class="fa fa-users"></i> </button>
                            <button title="Produtores" id="btnprodutores" value="Produtores" class="table-menu-item-repos"> <i id="table-produtores" class="fas fa-user-tie"></i> </button>
                            <button title="Produtos" id="btnprods" value="Produtos" class="table-menu-item-repos"> <i id="table-produtos" class="fas fa-shipping-fast"></i> </button>
                            <button title="Produtos(WordPress)" id="btnprods_wp" value="Loja" class="table-menu-item-repos"> <i id="table-produtoswp" class="fa fa-shopping-cart"></i> </button>
                            <button title="Compras" id="btncompras" value="Loja" class="table-menu-item-repos"> <i id="table-compras" class="fa fa-dollar-sign"></i> </button>
                        </div>
                        <nav class="table-item-menu">
                            <input type="checkbox" href="#" class="table-menu-open" name="table-menu-open" id="table-menu-open" />
                            <label id="table-menu-open-handler" class="table-menu-open-button" for="table-menu-open">
                                <span class="lines line-1"></span>
                                <span class="lines line-2"></span>
                                <span class="lines line-3"></span>
                            </label>
                            <div class="table-real-menu">
                                <button title="Utilizadores" id="btnusers" value="Utilizadores" class="table-menu-item"> <i id="table-users" class="fa fa-users"></i> </button>
                                <button title="Produtores" id="btnprodutores" value="Produtores" class="table-menu-item"> <i id="table-produtores" class="fas fa-user-tie"></i> </button>
                                <button title="Produtos" id="btnprods" value="Produtos" class="table-menu-item"> <i id="table-produtos" class="fas fa-shipping-fast"></i> </button>
                                <button title="Produtos(WordPress)" id="btnprods_wp" value="Loja" class="table-menu-item"> <i id="table-produtoswp" class="fa fa-shopping-cart"></i> </button>
                                <button title="Compras" id="btncompras" value="Loja" class="table-menu-item"> <i id="table-compras" class="fa fa-dollar-sign"></i> </button>
                            </div>
                        </nav>
                    </div>
                    <div class="card-body pt-0 pb-5">
                        <table id="tableausers" class="ui celled table" style="width:100%">
                            <thead id="tableausersthead">
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th class="d-none d-lg-table-cell">Apelido</th>
                                    <th class="d-none d-lg-table-cell">Email</th>
                                    <th class="d-none d-lg-table-cell">Tipo de Utilizador</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($users as $key => $user)
                                    <td>{{$user->id}}</td>
                                    <td>
                                        <a class="text-dark" href="">{{$user->name}}</a>
                                    </td>
                                    <td>
                                        <a class="text-dark" href="">{{$user->apelido}}</a>
                                    </td>
                                    <td>
                                        <a class="text-dark" href="">{{$user->email}}</a>
                                    </td>
                                    <td>
                                        <a class="text-dark" href="">{{$user->tipouser}}</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <table id="tableaprodutores" class="ui celled table" style="width:100%">
                            <thead id="tableprodutoresthead">
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th class="d-none d-lg-table-cell">Apelido</th>
                                    <th class="d-none d-lg-table-cell">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($users as $key => $produtor)
                                    <td>{{$user->id}}</td>
                                    <td>
                                        <a class="text-dark" href="">{{$produtor->name}}</a>
                                    </td>
                                    <td>
                                        <a class="text-dark" href="">{{$produtor->apelido}}</a>
                                    </td>
                                    <td class="d-none d-lg-table-cell">{{$produtor->email}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




        <div class="col-xl-4 col-lg-6 col-12">

            <!-- Polar and Radar Chart -->
            <div class="card card-default">
                <div class="card-header justify-content-center">
                    <h2>Géneros dos Utilizadores</h2>
                </div>
                <div class="card-body pt-0">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div>
                            <canvas id="polar" width="389" height="270" class="chartjs-render-monitor" style="display: block; width: 389px; height: 270px;"></canvas>
                        </div>
                        <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div>
                            <canvas id="generosgrafico" style="display: block; width: 205px; height: 270px;" height="270" class="chartjs-render-monitor" width="205"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
    var user_utl_12_total = {{$user_utl_12_total}};
    var user_utl_11_total = {{$user_utl_11_total}};
    var user_utl_10_total = {{$user_utl_10_total}};
    var user_utl_9_total = {{$user_utl_9_total}};
    var user_utl_8_total = {{$user_utl_8_total}};
    var user_utl_7_total = {{$user_utl_7_total}};
    var user_utl_6_total = {{$user_utl_6_total}};
    var user_utl_5_total = {{$user_utl_5_total}};
    var user_utl_4_total = {{$user_utl_4_total}};
    var user_utl_3_total = {{$user_utl_3_total}};
    var user_utl_2_total = {{$user_utl_2_total}};
    var user_utl_1_total = {{$user_utl_1_total}};
    var users_masculino_total = {{$users_masculino_total}};
    var users_feminino_total = {{$users_feminino_total}};
    var users_nao_revelar_total = {{$users_nao_revelar_total}};
    var users_genero_null_total = {{$users_genero_null_total}};
  </script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="{{ asset('assets\js\paginas\backend\users.js') }}"></script>
    
    @endsection