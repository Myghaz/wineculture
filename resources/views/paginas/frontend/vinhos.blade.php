@extends("paginas.frontend.layout")

@section('title', 'Vinhos')

@section('links')
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/vinhos.css') }}">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">

@endsection

@section('content')

<div class="sobre_banner_div">
  <img class="sobre_banner" src="assets\img\paginas\frontend\tipo_de_vinhos\banner_vin.png" alt="banner">
</div>

<div class="container mb-5">
    <div class="row m-3">

        @foreach($vinhos as $key => $vinho)

        <div class="col-md-3 mb-2" data-aos="fade-up">
            <a href="/vinhos/{{$vinho->id}}" class="wine_desc">
                <div class="zoom-img">
					@foreach($vinhos_img as $key_img => $vinho_img)
						@if($vinho_img->id == $vinho->img)
							<img src="\storage\vinhos\{{$vinho_img->img}}" class="wine_img" alt="produto_vinho">
						@endif
					@endforeach
                </div>
                {{$vinho->nome}}<br>
            </a>
        </div>
        @endforeach
    </div>

</div>
@endsection
@section("javascript")
<script src="{{ asset('js/semantic.min.js') }}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="{{ URL::asset('assets/js/paginas/frontend/sobre.js') }}"></script>
<script>
    AOS.init();
</script>
@endsection