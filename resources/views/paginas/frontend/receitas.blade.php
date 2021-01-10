<!doctype html>
<html>

<head>
    @section('title', 'Receitas')
    @include('includes.frontend.head')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/receitas.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/bootstrap.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>
    @include('includes.frontend.navbar')
    <section>
        <img src="assets\img\paginas\frontend\receitas\banner-vinho1.jpg" alt="">
      <div class="filtro">
        <article class="card-group-item">
            <div class="filter-content">
                <div class="card-body">
                    <div class="custom-control custom-checkbox">
                        <span class="float-right badge badge-light round">2</span>
                          <input type="checkbox" class="custom-control-input" id="Check1">
                          <label class="custom-control-label" for="Check1">Vinho Tinto</label>
                    </div> <!-- form-check.// -->

                    <div class="custom-control custom-checkbox">
                        <span class="float-right badge badge-light round">2</span>
                          <input type="checkbox" class="custom-control-input" id="Check2">
                         <label class="custom-control-label" for="Check2">Vinho Branco</label>
                    </div> <!-- form-check.// -->

                    <div class="custom-control custom-checkbox">
                        <span class="float-right badge badge-light round">7</span>
                          <input type="checkbox" class="custom-control-input" id="Check3">
                          <label class="custom-control-label" for="Check3">Vinho Verde</label>
                    </div> <!-- form-check.// -->

                    <div class="custom-control custom-checkbox">
                        <span class="float-right badge badge-light round">7</span>
                          <input type="checkbox" class="custom-control-input" id="Check4">
                          <label class="custom-control-label" for="Check4">Vinho Rosé</label>
                    </div> <!-- form-check.// -->

                    <div class="custom-control custom-checkbox">
                        <span class="float-right badge badge-light round">7</span>
                          <input type="checkbox" class="custom-control-input" id="Check5">
                          <label class="custom-control-label" for="Check5">Espumante</label>
                    </div> <!-- form-check.// -->
                </div> <!-- card-body.// -->
            </div>
        </article> <!-- card-group-item.// -->
    </div>
        <div class="container">
<br>
    <div class="row">
        @foreach($receitas as $value)
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1" src="{{ Storage::url($value->foto) }}">
                        <img class="pic-2" src="{{ Storage::url($value->foto) }}">
                    </a>
                    <ul class="social">
                        <li><a href="{{ Storage::url($value->foto) }}" target="_blank"><i class="fa fa-eye"></i></a></li>
                    </ul>
                    <span class="product-new-label">Novo</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">{{$value->nome}} </a></h3>
                    <div class="desc">
                        {{$value->descricao}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    <br>

</body>
@include('includes.frontend.footer')
</html>
