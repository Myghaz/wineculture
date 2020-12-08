@extends ('layouts.backend.admin')
@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
  <div class="content">
    <!-- Top Statistics -->
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
              <button value="bar" onclick="updateusersChartType()" class="menu-item barras"><i id="baricon" class="fa fa-chart-bar"></i></button>
              <button value="line" onclick="updateusersChartType()" class="menu-item linhas"><i id="lineicon" class="fa fa-area-chart"></i></button>
              <button value="pie" onclick="updateusersChartType()" class="menu-item torta"><i id="pieicon" class="fas fa-chart-pie"></i></button>
              <button value="doughnut" onclick="updateusersChartType()" class="menu-item donut"><i id="doughnuticon" class="far fa-dot-circle"></i></button>
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
            <p>Produtores Totais (2020)</p>
            <div class="mudargraf">
              <input type="checkbox" href="#" class="menu-open" name="menu-open" id="produtoresmenu-open" />
              <label class="menu-open-button" for="produtoresmenu-open">
                <span class="lines line-1"></span>
                <span class="lines line-2"></span>
                <span class="lines line-3"></span>
              </label>
              <button value="bar" onclick="updateprodutoresChartType()" class="menu-item barras"><i id="baricon" class="fa fa-chart-bar"></i></button>
              <button value="line" onclick="updateprodutoresChartType()" class="menu-item linhas"><i id="lineicon" class="fa fa-area-chart"></i></button>
              <button value="pie" onclick="updateprodutoresChartType()" class="menu-item torta"><i id="pieicon" class="fas fa-chart-pie"></i></button>
              <button value="doughnut" onclick="updateprodutoresChartType()" class="menu-item donut"><i id="doughnuticon" class="far fa-dot-circle"></i></button>
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
              <button value="bar" onclick="updatecomprasChartType()" class="menu-item barras"><i id="baricon" class="fa fa-chart-bar"></i></button>
              <button value="line" onclick="updatecomprasChartType()" class="menu-item linhas"><i id="lineicon" class="fa fa-area-chart"></i></button>
              <button value="pie" onclick="updatecomprasChartType()" class="menu-item torta"><i id="pieicon" class="fas fa-chart-pie"></i></button>
              <button value="doughnut" onclick="updatecomprasChartType()" class="menu-item donut"><i id="doughnuticon" class="far fa-dot-circle"></i></button>
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
              <button value="bar" onclick="updateprodsChartType()" class="menu-item barras"><i id="baricon" class="fa fa-chart-bar"></i></button>
              <button value="line" onclick="updateprodsChartType()" class="menu-item linhas"><i id="lineicon" class="fa fa-area-chart"></i></button>
              <button value="pie" onclick="updateprodsChartType()" class="menu-item torta"><i id="pieicon" class="fas fa-chart-pie"></i></button>
              <button value="doughnut" onclick="updateprodsChartType()" class="menu-item donut"><i id="doughnuticon" class="far fa-dot-circle"></i></button>
            </div>
            <div class="chartjs-wrapper">
              <canvas id="prodsgrafico"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <!-- Recent Order Table -->
        <div class="card card-table-border-none" id="recent-orders">
          <div class="card-header justify-content-between">
            <h2>Recent Orders</h2>
            <nav class="table-item-menu">
              <input type="checkbox" href="#" class="table-menu-open" name="table-menu-open" id="table-menu-open" />
              <label id="table-menu-open-handler" class="table-menu-open-button" for="table-menu-open">
              <span class="lines line-1"></span>
                <span class="lines line-2"></span>
                <span class="lines line-3"></span>
              </label>
              <div class="table-real-menu">
                <button value="Utilizadores" class="table-menu-item"> <i id="table-users" class="fa fa-users"></i> </button>
                <button value="Produtores" class="table-menu-item"> <i id="table-produtores" class="fas fa-user-tie"></i> </button>
                <button value="Produtos" class="table-menu-item"> <i id="table-produtos" class="fas fa-shipping-fast"></i> </button>
                <button value="Loja" class="table-menu-item"> <i id="table-produtoswp" class="fa fa-shopping-cart"></i> </button>
                <button value="Loja" class="table-menu-item"> <i id="table-compras" class="fa fa-dollar-sign"></i> </button>
              </div>
            </nav>
          </div>
          <div class="card-body pt-0 pb-5">
            <table class="table card-table table-responsive table-responsive-large" style="width:100%">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Product Name</th>
                  <th class="d-none d-lg-table-cell">Units</th>
                  <th class="d-none d-lg-table-cell">Order Date</th>
                  <th class="d-none d-lg-table-cell">Order Cost</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>24541</td>
                  <td>
                    <a class="text-dark" href=""> Coach Swagger</a>
                  </td>
                  <td class="d-none d-lg-table-cell">1 Unit</td>
                  <td class="d-none d-lg-table-cell">Oct 20, 2018</td>
                  <td class="d-none d-lg-table-cell">$230</td>
                  <td>
                    <span class="badge badge-success">Completed</span>
                  </td>
                  <td class="text-right">
                    <div class="dropdown show d-inline-block widget-dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                        <li class="dropdown-item">
                          <a href="#">View</a>
                        </li>
                        <li class="dropdown-item">
                          <a href="#">Remove</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>24541</td>
                  <td>
                    <a class="text-dark" href=""> Toddler Shoes, Gucci Watch</a>
                  </td>
                  <td class="d-none d-lg-table-cell">2 Units</td>
                  <td class="d-none d-lg-table-cell">Nov 15, 2018</td>
                  <td class="d-none d-lg-table-cell">$550</td>
                  <td>
                    <span class="badge badge-warning">Delayed</span>
                  </td>
                  <td class="text-right">
                    <div class="dropdown show d-inline-block widget-dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order2">
                        <li class="dropdown-item">
                          <a href="#">View</a>
                        </li>
                        <li class="dropdown-item">
                          <a href="#">Remove</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>24541</td>
                  <td>
                    <a class="text-dark" href=""> Hat Black Suits</a>
                  </td>
                  <td class="d-none d-lg-table-cell">1 Unit</td>
                  <td class="d-none d-lg-table-cell">Nov 18, 2018</td>
                  <td class="d-none d-lg-table-cell">$325</td>
                  <td>
                    <span class="badge badge-warning">On Hold</span>
                  </td>
                  <td class="text-right">
                    <div class="dropdown show d-inline-block widget-dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order3">
                        <li class="dropdown-item">
                          <a href="#">View</a>
                        </li>
                        <li class="dropdown-item">
                          <a href="#">Remove</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>24541</td>
                  <td>
                    <a class="text-dark" href=""> Backpack Gents, Swimming Cap Slin</a>
                  </td>
                  <td class="d-none d-lg-table-cell">5 Units</td>
                  <td class="d-none d-lg-table-cell">Dec 13, 2018</td>
                  <td class="d-none d-lg-table-cell">$200</td>
                  <td>
                    <span class="badge badge-success">Completed</span>
                  </td>
                  <td class="text-right">
                    <div class="dropdown show d-inline-block widget-dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order4">
                        <li class="dropdown-item">
                          <a href="#">View</a>
                        </li>
                        <li class="dropdown-item">
                          <a href="#">Remove</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>24541</td>
                  <td>
                    <a class="text-dark" href=""> Speed 500 Ignite</a>
                  </td>
                  <td class="d-none d-lg-table-cell">1 Unit</td>
                  <td class="d-none d-lg-table-cell">Dec 23, 2018</td>
                  <td class="d-none d-lg-table-cell">$150</td>
                  <td>
                    <span class="badge badge-danger">Cancelled</span>
                  </td>
                  <td class="text-right">
                    <div class="dropdown show d-inline-block widget-dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order5">
                        <li class="dropdown-item">
                          <a href="#">View</a>
                        </li>
                        <li class="dropdown-item">
                          <a href="#">Remove</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>







  </div>
  <script>
    var totalUsersJan = @json($totalUsersJan);
    var totalUsersFev = @json($totalUsersFev);
    var totalUsersMar = @json($totalUsersMar);
    var totalUsersAbr = @json($totalUsersAbr);
    var totalUsersMai = @json($totalUsersMai);
    var totalUsersJun = @json($totalUsersJun);
    var totalUsersJul = @json($totalUsersJul);
    var totalUsersAgo = @json($totalUsersAgo);
    var totalUsersSet = @json($totalUsersSet);
    var totalUsersOut = @json($totalUsersOut);
    var totalUsersNov = @json($totalUsersNov);
    var totalUsersDez = @json($totalUsersDez);

    var totalProdutoresJan = @json($totalProdutoresJan);
    var totalProdutoresFev = @json($totalProdutoresFev);
    var totalProdutoresMar = @json($totalProdutoresMar);
    var totalProdutoresAbr = @json($totalProdutoresAbr);
    var totalProdutoresMai = @json($totalProdutoresMai);
    var totalProdutoresJun = @json($totalProdutoresJun);
    var totalProdutoresJul = @json($totalProdutoresJul);
    var totalProdutoresAgo = @json($totalProdutoresAgo);
    var totalProdutoresSet = @json($totalProdutoresSet);
    var totalProdutoresOut = @json($totalProdutoresOut);
    var totalProdutoresNov = @json($totalProdutoresNov);
    var totalProdutoresDez = @json($totalProdutoresDez);

    var totalProdsJan = @json($totalProdsJan);
    var totalProdsFev = @json($totalProdsFev);
    var totalProdsMar = @json($totalProdsMar);
    var totalProdsAbr = @json($totalProdsAbr);
    var totalProdsMai = @json($totalProdsMai);
    var totalProdsJun = @json($totalProdsJun);
    var totalProdsJul = @json($totalProdsJul);
    var totalProdsAgo = @json($totalProdsAgo);
    var totalProdsSet = @json($totalProdsSet);
    var totalProdsOut = @json($totalProdsOut);
    var totalProdsNov = @json($totalProdsNov);
    var totalProdsDez = @json($totalProdsDez);
  </script>
  @endsection