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
<div class="container">
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
                    <div class="price">
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
