@extends ('layouts.backend.admin')
@section('title', 'Dashboard')
@section('content')
<nav aria-label="breadcrumb bread">
  <ol class="breadcrumb breadcrumb-inverse">
    <li class="breadcrumb-item"><a href="{{ route('admin_dashboard')}}">Admin</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
  </ol>
</nav>
<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="col-xl-3 col-sm-6">
        <div class="card card-mini mb-4">
          <div class="card-body">
            <h2 class="mb-1">{{$totalUsers}}</h2>
            <p>Registos Totais (2020)</p>
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
            <h2 class="mb-1">{{$totalProdutores}}</h2>
            <p>Produtores Totais(2020)</p>
            <div class="mudargraf">
              <input type="checkbox" href="#" class="menu-open" name="menu-open" id="produtoresmenu-open" />
              <label class="menu-open-button" for="produtoresmenu-open">
                <span class="lines line-1"></span>
                <span class="lines line-2"></span>
                <span class="lines line-3"></span>
              </label>
              <button title="Barras" value="bar" onclick="updateprodutoresChartType()" class="menu-item barras"><i id="baricon" class="fa fa-chart-bar"></i></button>
              <button title="Linhas" value="line" onclick="updateprodutoresChartType()" class="menu-item linhas"><i id="lineicon" class="fa fa-area-chart"></i></button>
              <button title="Torta" value="pie" onclick="updateprodutoresChartType()" class="menu-item torta"><i id="pieicon" class="fas fa-chart-pie"></i></button>
              <button title="Doughnut" value="doughnut" onclick="updateprodutoresChartType()" class="menu-item donut"><i id="doughnuticon" class="far fa-dot-circle"></i></button>
            </div>
            <div class="chartjs-wrapper">
              <canvas id="produtoresgrafico"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card card-mini mb-4">
          <div class="card-body">
            <h2 class="mb-1">71,503</h2>
            <p>Nadinha</p>
            <div class="mudargraf">
              <input type="checkbox" href="#" class="menu-open" name="menu-open" id="comprasmenu-open" />
              <label class="menu-open-button" for="comprasmenu-open">
                <span class="lines line-1"></span>
                <span class="lines line-2"></span>
                <span class="lines line-3"></span>
              </label>
              <button title="Barras" value="bar" onclick="updatecomprasChartType()" class="menu-item barras"><i id="baricon" class="fa fa-chart-bar"></i></button>
              <button title="Linhas" value="line" onclick="updatecomprasChartType()" class="menu-item linhas"><i id="lineicon" class="fa fa-area-chart"></i></button>
              <button title="Torta" value="pie" onclick="updatecomprasChartType()" class="menu-item torta"><i id="pieicon" class="fas fa-chart-pie"></i></button>
              <button title="Doughnut" value="doughnut" onclick="updatecomprasChartType()" class="menu-item donut"><i id="doughnuticon" class="far fa-dot-circle"></i></button>
            </div>
            <div class="chartjs-wrapper">
              <canvas id="comprasgrafico"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card card-mini mb-4">
          <div class="card-body">
            <h2 class="mb-1">{{$totalProds}}</h2>
            <p>Produtos Totais (2020)</p>
            <div class="mudargraf">
              <input type="checkbox" href="#" class="menu-open" name="menu-open" id="prodsmenu-open" />
              <label class="menu-open-button" for="prodsmenu-open">
                <span class="lines line-1"></span>
                <span class="lines line-2"></span>
                <span class="lines line-3"></span>
              </label>
              <button title="Barras" value="bar" onclick="updateprodsChartType()" class="menu-item barras"><i id="baricon" class="fa fa-chart-bar"></i></button>
              <button title="Linhas" value="line" onclick="updateprodsChartType()" class="menu-item linhas"><i id="lineicon" class="fa fa-area-chart"></i></button>
              <button title="Torta" value="pie" onclick="updateprodsChartType()" class="menu-item torta"><i id="pieicon" class="fas fa-chart-pie"></i></button>
              <button title="Doughnut" value="doughnut" onclick="updateprodsChartType()" class="menu-item donut"><i id="doughnuticon" class="far fa-dot-circle"></i></button>
            </div>
            <div class="chartjs-wrapper">
              <canvas id="prodsgrafico"></canvas>
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
                  @foreach($produtores as $key => $produtor)
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
  @endsection