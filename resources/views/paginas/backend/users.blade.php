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
        <div class="col-xl-4 col-md-12">
                <!-- Doughnut Chart -->
                <div class="card card-default">
                    <div class="card-header justify-content-center">
                        <h2>{{$total_users_utls_12meses}} Novos Registos (Ultimos 12 Meses)</h2>
                    </div>
                    <div class="card-body">
                        <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="usersgrafico" width="389" height="210" class="chartjs-render-monitor" style="display: block; width: 389px; height: 275px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <!-- Doughnut Chart -->
                <div class="card card-default">
                    <div class="card-header justify-content-center">
                        <h2>Géneros dos Utilizadores</h2>
                    </div>
                    <div class="card-body">
                        <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="generosgradfico" class="chartjs-render-monitor" style="display: block; width: 389px; height: 275px;"></canvas>
                    </div>
               
               
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <!-- Doughnut Chart -->
                <div class="card card-default">
                    <div class="card-header justify-content-center">
                        <h2>Idade dos Utilizadores</h2>
                    </div>
                    <div class="card-body">
                        <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="generosgradfico" class="chartjs-render-monitor" style="display: block; width: 389px; height: 275px;"></canvas>
                    </div>
               
               
                </div>
            </div>

        </div>
        <div class="row tabelas">
            <div class="col-12">
                <div class="card card-table-border-none" id="users">
                    <div class="card-header justify-content-between">
                        <h2 id="titulotable">Tabela de Utilizadores</h2>
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