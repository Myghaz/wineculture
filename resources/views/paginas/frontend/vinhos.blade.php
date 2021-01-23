@extends("paginas.frontend.layout")

@section('title', 'Vinhos')

@section("links")
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/vinhos.css') }}">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
@endsection

@section("content")
<div class="sobre_banner_div">
  <img class="sobre_banner" src="assets\img\paginas\frontend\tipo_de_vinhos\banner_vin.png" alt="banner">
</div>

<div class="container mb-5">
	<div class="row m-3">

		@foreach($vinhos as $key => $vinho)

		<div class="col-md-3 mb-2" data-aos="fade-up">
			<a href="/vinhos/{{$vinho->id}}" class="wine_desc">
				<div class="zoom-img">
					<img src="\storage\vinhos\{{$vinho->img}}" class="wine_img" alt="produto_vinho">
				</div>
				{{$vinho->nome}}<br>
			</a>
		</div>
		@endforeach
	</div>

</div>

@section("javascript")
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="assets\js\paginas\frontend\sobre.js"></script>
<script>
	AOS.init();
</script>
@endsection
@endsection