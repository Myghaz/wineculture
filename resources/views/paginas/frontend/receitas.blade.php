@extends("paginas.frontend.layout")

@section('title', 'Receitas')

@section("links")
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/index.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/receitas.css') }}">
@endsection

@section("content")
<img src="assets\img\paginas\frontend\receitas\banner-vinho1.jpg" alt="">

<div class="container">
    <br>
    <div class="row portfolio">
        <div class="col-lg-12">
            <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">Todos</li>
                @foreach ($category_wines as $category_wine)
                <li data-filter=".receitas-{{$category_wine->id}}">{{$category_wine->nome}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row portfolio-container">
        @foreach($receitas as $value)
        <div class="col-md-3 col-sm-6 portfolio-item receitas-{{$value->id_categoria}}">
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
    </div>

</div>
@endsection

@section("javascript")
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
<script src="{{ URL::asset('assets/css/paginas/frontend/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
<script src="{{ URL::asset('assets/css/paginas/frontend/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ URL::asset('assets/css/paginas/frontend/vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ URL::asset('assets/css/paginas/frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/paginas/frontend/index.js') }}"></script>
@endsection