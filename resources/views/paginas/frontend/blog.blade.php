@extends("paginas.frontend.layout")

@section('title', 'Blog')

@section("links")
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/blog.css') }}">

@endsection

@section("content")
<div class="row">
    <div class="ui grid">
        <div class="ui large breadcrumb">
            <a class="section">Home</a>
            <i class="right chevron icon divider"></i>
            <a class="section">Registration</a>
            <i class="right chevron icon divider"></i>
            <div class="active section">Personal Information</div>
        </div>
    </div>
    <div class="ui basic modal acarregar">
        <div class="ui icon header">
            <div style="width: 250px;" class="ui active slow green double loader"><br><br>
                A Carregar Lista de Posts</div>
        </div>
    </div>
    <div class="ui grid maincontainer">
        <div class="row">
            <div class="three wide column semifiltros"></div>
            <div class="twelve wide column vinhosheader">
                <div class="ui attached stackable menu semiheader">
                    <div class="ui container headercontainer">
                        <a class="item">
                            {{$blogtotal}} Posts encontrados
                        </a>
                        <a class="item refresh">
                            <i id="refreshvinhos" class="sync icon"></i>
                        </a>
                        <div title="Filtrar Lista" class="right item ordenacao">
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
<section class="grelha">
    <div class="containerr">
        <div class="card-column column-0">
            @foreach($blogs as $value)
            <div class="card card-color-0" id="{{$value->id}}">
                <input type="hidden" name="id" value="{{$value->id}}">
                <div class="border"></div>
                <img src="{{ url('assets/img/paginas/frontend/blog/' .$value->img)}}" />
                <div style="display: none;" id="text{{$value->id}}">

                    <h1 id="titulo">{{$value->titulo}}</h1>
                    <p id="data">{{$value->created_at}}</p>
                    <p id="desc">{{$value->preview}}</p>
                    <div class="autor" id="autor">
                        <img src="http://wineculture.test/wp-content/uploads/2020/10/banner5.jpg" /><span class="nome">
                        @foreach($users as $user)
                        @if ($user->id == $value->id_user)
                        {{$user->name}}</span><span>{{$user->apelido}}</span>
                        @endif
                        @endforeach

                    </div>
                </div>
                <div class="texto">
                    <h2 id="texto_titulo" class="info">{{$value->titulo}}
                        <span class="categoria">
                        @foreach($categorias as $categoria)
                        @if ($categoria->id == $value->id_categoria)
                        {{$categoria->name}}
                        @endif
                        @endforeach
                        </span></h2>
                    <a class="info">Ler Mais</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <div id="cover" class="cover"></div>

    <div id="open-content" class="open-content">
        <a href="#" id="close-content" class="close-content"><span class="x-1"></span><span class="x-2"></span></a>
        <img id="open-content-image" src="">
        <div class="text" id="open-content-text"></div>
    </div>
</section>
</div>
@section("javascript")
<script src="{{ URL::asset('assets/js/paginas/frontend/blog.js') }}"></script>
@endsection
@endsection
