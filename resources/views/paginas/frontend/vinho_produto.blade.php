<!DOCTYPE html>
<html lang = "pt">

<head>
	@section('title', 'Vinho Produto')
	@extends ('includes.frontend.head')
	
	<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/tipo_de_vinhos.css') }}">
	
	<style>

.prod-cat li a{
    border-bottom: 1px dashed #d9d9d9;
}

.prod-cat li a {
    color: #3b3b3b;
}

.prod-cat li ul {
    margin-left: 30px;
}

.prod-cat li ul li a{
    border-bottom:none;
}
.prod-cat li ul li a:hover,.prod-cat li ul li a:focus, .prod-cat li ul li.active a , .prod-cat li a:hover,.prod-cat li a:focus, .prod-cat li a.active{
    background: none;
    color: #ff7261;
}

.pro-lab{
    margin-right: 20px;
    font-weight: normal;
}

.pro-page-list {
    margin: 5px 0 0 0;
}

.pro-title {
    color: #5A5A5A;
    display: inline-block;
    margin-top: 20px;
    font-size: 16px;
}


.pro-img-details {
    width:250px
}

.pro-img-details img {
    width: 100%;
}

.pro-d-title {
	width: 50%;
    font-size: 40px;
    font-weight: normal;
}

.product_meta {
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
    padding: 10px 0;
    margin: 15px 0;
}

.product_meta2 {
    border-bottom: 1px solid #eee;
    padding: 10px 0;
    margin: 15px 0;
}

.product_meta2 span {
    display: block;
    margin-bottom: 10px;
}

.product_meta span {
    display: block;
    margin-bottom: 10px;
}
.product_meta a, .pro-price{
    color:#fc5959 ;
}

.pro-price, .amount-old {
    font-size: 18px;
    padding: 0 10px;
}

.quantity {
    width: 120px;
}

.pro-img-list {
    margin: 10px 0 0 -15px;
    width: 100%;
    display: inline-block;
}

.pro-img-list a {
    float: left;
    margin-right: 10px;
    margin-bottom: 10px;
}
	
	</style>
</head>

<body>
	@include('includes.frontend.navbar')
	@yield('content')
	
	<div class="container mt-5 mb-5">
          <div class="pro-img-details">
			<img src="assets\img\vinhos\wine_test.png" alt="">
          </div>
          
          <div class="mt-2">
              <h1 class="pro-d-title mb-4">
			  @foreach($vinho_select as $key => $vinho)
			  {{$vinho->nome}}
			  @endforeach
              </h1>
              <p>
                @foreach($vinho_select as $key => $vinho)
					{{$vinho->descricao}}
				@endforeach
              </p>
              <div class="product_meta">
                  <span class="posted_in"><strong>Categoria:</strong> <a rel="tag" href="#">
				  @foreach($categorias as $key => $categoria)
                  {{$categoria->nome}}
				@endforeach
				  </a></span>
                  <span class="tagged_as"><strong>Região:</strong> <a rel="tag" href="#">
				  @foreach($vinho_select as $key => $vinho)
			  {{$vinho->regiao}}
			  @endforeach
				  </a></span>
				  <span class="tagged_as"><strong>Produtor:</strong> <a rel="tag" href="#">
				  @foreach($vinho_select as $key => $vinho)
			  {{$vinho->id_produtor}}
			  @endforeach
				  </a></span>
              </div>
			  <div class="product_meta2">
                  <span class="posted_in"><strong>Percentagem Álcool: </strong>23%</span>
				  <span class="posted_in"><strong>Quantidade CL: </strong>75CL</span>
              </div>
              <div class="m-bot15">
				<strong>Preço :</strong>
				<span class="pro-price">@foreach($vinho_select as $key => $vinho)
			  {{$vinho->preco}}
			  @endforeach
			  €</span>
			  </div>	
				<span class="posted_in"><strong>Stock : </strong>@foreach($vinho_select as $key => $vinho)
			  {{$vinho->stock}}
			  @endforeach</span>
          </div>
	</div>
	
  @include('includes.frontend.footer')	
</body>
</html>