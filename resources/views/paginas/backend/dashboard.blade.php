@extends ('layouts.backend.admin')
@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">

			{{$totalJan}}
        <div class="content">						 
                  <!-- Top Statistics -->
                  <div class="row">
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">{{$totalUsers}}</h2>
                          <p>Novos Registos (2020)</p>
                          <div class="chartjs-wrapper">
                            <canvas id="barChart"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini  mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">9,503</h2>
                          <p>New Visitors Today</p>
                          <div class="chartjs-wrapper">
                            <canvas id="dual-line"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">71,503</h2>
                          <p>Monthly Total Order</p>
                          <div class="chartjs-wrapper">
                            <canvas id="area-chart"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">9,503</h2>
                          <p>Total Revenue This Year</p>
                          <div class="chartjs-wrapper">
                            <canvas id="line"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
</div>
<script src="{{asset('assets\js\paginas\backend\dashboard.js')}}"></script>
<script>
   var totalJan = @json($totalJan);
   var totalFev = @json($totalFev);
   var totalMar = @json($totalMar);
   var totalAbr = @json($totalAbr);
   var totalMai = @json($totalMai);
   var totalJun = @json($totalJun);
   var totalJul = @json($totalJul);
   var totalAgo = @json($totalAgo);
   var totalSet = @json($totalSet);
   var totalOut = @json($totalOut);
   var totalNov = @json($totalNov);
   var totalDez = @json($totalDez);
</script>
@endsection