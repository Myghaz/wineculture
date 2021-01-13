@extends("paginas.frontend.layout")

@section('title', 'Vinhos')

@section("content")

<script src="assets\js\paginas\frontend\sobre.js"></script>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="assets\img\paginas\frontend\tipo_de_vinhos\banner_vinho.png" alt="Banner">
		</div>
	</div>
</div>

<div class="container mt-5 mb-5">
	<div class="row m-3 mt-5">

		@foreach($vinhos as $key => $vinho)

		<div class="col-md-3 mb-2" data-aos="fade-up">
			<a href="/vinhos/{{$vinho->id}}" style="text-decoration:none">
				<div class="zoom-img">
					<img src="assets\img\vinhos\{{$vinho->img}}" alt="produto_vinho" style="object-fit: cover; width:250pt;">
				</div>
				{{$vinho->nome}}<br>
			</a>
		</div>
		@endforeach
	</div>

</div>

@section("javascript")
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
	AOS.init();
</script>
@endsection
@endsection