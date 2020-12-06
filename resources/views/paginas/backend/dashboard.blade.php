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
                          <div class="chartjs-wrapper">
                            <canvas id="graficousersbarras"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">{{$totalProdutores}}</h2>
                          <p>Produtores Totais (2020)</p>
                          <div class="chartjs-wrapper">
                            <canvas id="graficoprodutoresbarras"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">71,503</h2>
                          <p>Nadinha</p>
                          <div class="chartjs-wrapper">
                            <canvas id="area-chart"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">{{$totalProds}}</h2>
                          <p>Produtos Totais (2020)</p>
                          <div class="chartjs-wrapper">
                            <canvas id="graficoprodsbarras"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
</div>
<script src="{{asset('assets\js\paginas\backend\dashboard.js')}}"></script>
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