<!DOCTYPE html>
<html lang = "pt">

<head>
    @section('title', 'Vinhos')
	@extends ('includes.frontend.head')
	
	<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/tipo_de_vinhos.css') }}">
	
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	
</head>

<body class="body_offset">
	@include('includes.frontend.navbar')
	@yield('content')
	
	
	<button onclick="topFunction()" id="myBtn" title="Go to top">
	<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
	</svg>
	</button>
	
	<script src="assets\js\paginas\frontend\sobre.js"></script>

	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="assets\img\paginas\frontend\tipo_de_vinhos\banner_vinho_tinto.png" alt="Banner">
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row m-3 mt-5">
			<div class="col-md-3 mb-2" data-aos="fade-up">
				<div class="zoom-img">
					<img src="assets\img\vinhos\wine_test.png" alt="produto_vinho" style="width:250px">
				</div>
				Lorem Ipsum<br>
				2005
			</div>
		
			<div class="col-md-3 mb-2" data-aos="fade-up">
				<div class="zoom-img">
					<img src="assets\img\vinhos\wine_test.png" alt="produto_vinho" style="width:250px">
				</div>
				Lorem Ipsum<br>
				2005
			</div>
		
			<div class="col-md-3 mb-2" data-aos="fade-up">
				<div class="zoom-img">
					<img src="assets\img\vinhos\wine_test.png" alt="produto_vinho" style="width:250px">
				</div>
				Lorem Ipsum<br>
				2005
			</div>
		
			<div class="col-md-3 mb-2" data-aos="fade-up">
				<div class="zoom-img">
					<img src="assets\img\vinhos\wine_test.png" alt="produto_vinho" style="width:250px">
				</div>
				Lorem Ipsum<br>
				2005
			</div>
		
			<div class="col-md-3 mb-2" data-aos="fade-up">
				<div class="zoom-img">
					<img src="assets\img\vinhos\wine_test.png" alt="produto_vinho" style="width:250px">
				</div>
				Lorem Ipsum<br>
				2005
			</div>
		
		
		</div>
	
	</div>

	@include('includes.frontend.footer')	
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>