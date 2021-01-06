<!doctype html>
<html>

<head>
    @section('title', 'Receitas')
    @include('includes.frontend.head')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/receitas.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    @include('includes.frontend.navbar')
    <section>
        <div class="container">

            <div class="row">
				<div class="col-md-3">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<img src="" class="img-fluid" alt="" />
						</div>
						<h2>Vegetable Name..</h2>
						<a class="hvr-radial-in" href="#">$ 18.00</a>
					</div>
                </div><!-- end col -->
        </div>
    </section>
    <br>

</body>
@include('includes.frontend.footer')
</html>
