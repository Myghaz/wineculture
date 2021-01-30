@extends("paginas.frontend.layout")

@section('title', 'Vinhos')

@section('links')

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.6/dist/semantic.min.css">
<script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.6/dist/semantic.min.js"></script>
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/vinhos.css') }}">
@endsection

@section('content')
<div class="banner">
	<img class="img-fluid banner" src="http://wineculture_laravel.test/assets/img/paginas/frontend/faq-banner.jpg" alt="banner">
</div>
<div class="ui grid">
	<div class="ui large breadcrumb">
		<a class="section">Home</a>
		<i class="right chevron icon divider"></i>
		<a class="section">Registration</a>
		<i class="right chevron icon divider"></i>
		<div class="active section">Personal Information</div>
	</div>
</div>
<div class="ui grid maincontainer">
	<div class="row">
		<div class="three wide column semifiltros"></div>
		<div class="twelve wide column vinhosheader">
			<div class="ui attached stackable menu semiheader">
				<div class="ui container headercontainer">
					<a class="item">
						{{$vinhostotal}} vinhos encontrados
					</a>
					<div class="right item ordenacao">
						<div class="ui labeled icon dropdown">
							<i class="filter icon iconfiltro"></i>
							<span class="text">Filtrar Lista</span>
							<div class="menu">
								<div class="header">
									<i class="tags icon tagsicon"></i>
									Ordenar por:
								</div>
								<div class="item">
									Alfabética
								</div>
								<div class="item">
									Classificação
								</div>
								<div class="item">
									Data de Postagem
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ui grid semicontainer">
	<div class="row semirow">
		<div class="three wide column filtrosmain">
			<div class="filtros">
				<div class="ui vertical accordion menu filtrosmenu">
					<div class="item categorias">
						<a class="active title">
							<i class="dropdown icon"></i>
							Categorias
						</a>
						<div class="active content">
							<div class="ui form">
								<div class="grouped fields">
									@foreach ($categorias as $key => $categoria)
									<div class="field">
										<div class="ui toggle checkbox">
											<input type="checkbox" class="{{$categoria->nome}}" name="categoria_vinho" value="{{$categoria->nome}}">
											<label>{{$categoria->nome}}</label>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
					<div class="item produtores">
						<a class="active title">
							<i class="dropdown icon"></i>
							Produtores
						</a>
						<div class="active content">
							<div class="ui form">
								<div class="grouped fields">
									@foreach ($produtores_vinho as $key => $produtor_vinho)
									<div class="field">
										<div class="ui toggle checkbox">
											<input type="checkbox" class="{{$produtor_vinho->produtor->name}}" name="produtores_vinhos" value="{{$produtor_vinho->produtor->id}}">
											<label>{{$produtor_vinho->produtor->name}} {{$produtor_vinho->produtor->apelido}}</label>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="twelve wide column listavinhos">
			<div class="ui attached stackable menu headervinhos">
				<div class="ui container headervinhoscontainer">
					<div class="item itemfiltros">
						<a class="ui image label selectfiltros">
							Tinto
							<i class="delete icon"></i>
						</a>
						<a class="ui image label selectfiltros">
							Rosé
							<i class="delete icon"></i>
						</a>
						<a class="ui image label selectfiltros">
							Espumante
							<i class="delete icon"></i>
						</a>
					</div>
					<div class="item itemfiltros">
						<a class="ui image label reporfiltros">
							Repor Filtros
							<i class="delete icon"></i>
						</a>
					</div>
					<div class="right item headervinhospesquisa">
						<div class="ui search">
							<div class="ui icon input">
								<input class="prompt" type="text" placeholder="Pesquisar">
								<i class="search icon pesquisaricon"></i>
							</div>
							<div class="results"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
</script>
@foreach ($categorias as $key=>$categoria)
<script>
vinhos_categorias.push(@json($categoria->nome));
</script>
@endforeach

<script>
var vinhos_produtores = [];
</script>
@foreach ($vinhos_produtores as $key=>$vinhos_produtor)
<script>
nome1= @json($vinhos_produtor->produtor->name);
nome2= @json($vinhos_produtor->produtor->apelido);
var nomeapelido = nome1.concat(" ", nome2);
vinhos_produtores.push(nomeapelido);
</script>
<script src="{{ URL::asset('assets/js/paginas/frontend/vinhos.js') }}"></script>
@endsection