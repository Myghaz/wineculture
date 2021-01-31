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
					<a class="item refresh">
						<i id="refreshvinhos" class="sync icon"></i>
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
										<div class="ui toggle checkbox filtroschecks">
											<input type="checkbox" class="categoriacheckb" id="{{$categoria->nome}}" name="categoria{{$categoria->nome}}" value="{{$categoria->nome}}">
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
										<div class="ui toggle checkbox filtroschecks">
											<input type="checkbox"  class="{{$produtor_vinho->produtor->name}}&nbsp;&nbsp;{{$produtor_vinho->produtor->apelido}} categoriacheckb" id="{{$produtor_vinho->produtor->name}}&nbsp;&nbsp;{{$produtor_vinho->produtor->apelido}}" name="produtor{{$produtor_vinho->id_produtor}}" value="{{$produtor_vinho->produtor->id}}">
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
					</div>
						<a class="ui image label reporfiltros">
						<i class="trash alternate icon apagarfiltros"></i>
						</a>
				
					<div class="right item headervinhospesquisa">
						<div class="ui search">
							<div class="ui icon input">
								<input class="prompt" id="intpesquisa" type="text" placeholder="Pesquisar">
								<i class="search icon pesquisaricon"></i>
							</div>
							<div class="results"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="ui four column grid vinhoscontainer">
				@foreach ($vinhos as $key=>$vinho)
				<div name="vinhocol" class="column columnvinho categoria{{$vinho->categoria->nome}} produtor{{$vinho->id_produtor}}">
					<div class="ui cube shape shapevinho shapeimgs{{$vinho->id}}">
						<input type="hidden" id="id_vinho" value="{{$vinho->id}}">
						<div class="sides">
							<div class="side active shapevinho">
								<img class="img-fluid imgvinho" src="{{asset('storage/vinhos/'.$vinho->img) }}" alt="{{$vinho->nome}}">
							</div>
							@foreach ($vinhos_img as $key=>$vinho_img)
							@if ($vinho_img->id_vinho == $vinho->id)
							<div class="side sideimg">
								<img class="img-fluid imgvinho" src="{{asset('storage/vinhos/'.$vinho_img->img) }}" alt="{{$vinho->nome}}">
							</div>
							@endif
							@endforeach
						</div>
					</div>
					<div class="ui ignored icon direction buttons imgbtndown">
						<div class="ui icon button baixo" data-animation="flip" data-direction="right" title="Flip Right"><i class="down long arrow icon"></i></div>
					</div>
					<div class="ui ignored icon direction buttons imgbtnright">
						<div class="ui icon button direita" data-animation="flip" data-direction="right" title="Flip Right"><i class="right long arrow icon"></i></div>
					</div>
					<div class="dividervinho"></div>

					<div class="ui cube shape shapedetalhes shapedetalhes{{$vinho->id}}">
						<input type="hidden" id="id_vinho" value="{{$vinho->id}}">
						<div class="sides sidesdetalhes">
							<div class="side active">
								<div class="nomevinho">
									{{$vinho->nome}}
								</div>
							</div>
							<div class="side categoriavinhoside">
						
									{{$vinho->categoria->nome}}
							
							</div>
							<div class="side produtorvinhoside">
						
									{{$vinho->produtor->name}} {{$vinho->produtor->apelido}}
							
							</div>
						</div>
					</div>



				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection
@section('javascript')
<script>
	var vinhos = [];
</script>
@foreach ($vinhos as $key=>$vinho)
<script>
	vinhos.push(@json($vinho->nome));
</script>
@endforeach

<script>
	var vinhos_categorias = [];
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
	nome1 = @json($vinhos_produtor-> produtor->name);
	nome2 = @json($vinhos_produtor->produtor->apelido);
	var nomeapelido = nome1.concat(" ", nome2);
	vinhos_produtores.push(nomeapelido);
</script>
@endforeach
<script src="{{ URL::asset('assets/js/paginas/frontend/vinhos.js') }}"></script>
@endsection