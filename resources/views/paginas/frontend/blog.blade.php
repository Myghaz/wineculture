@extends("paginas.frontend.layout")

@section('title', 'Blog')

@section("links")
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/blog.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.6/dist/semantic.min.css">
<script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.6/dist/semantic.min.js"></script>

@endsection

@section("content")
<div class="row">
    <div class="ui grid">
        <div class="ui large breadcrumb">
            <a class="section" style="text-decoration: underline">Notícias</a>
        </div>
    </div>
    <div class="ui basic modal acarregar">
        <div class="ui icon header">
            <div style="width: 250px;" class="ui active slow green double loader"><br><br>
                A Carregar Lista Posts</div>
        </div>
    </div>
    <div class="ui basic modal aordenar">
        <div class="ui icon header">
            <div style="width: 250px;" class="ui active slow green double loader"><br><br>
                A Ordenar Lista Posts</div>
        </div>
    </div>
</div>
    <div class="ui grid maincontainer">
        <div class="row">
            <div class="sixteen wide column vinhosheader">
                <div class="ui attached stackable menu semiheader">
                    <div class="ui container headercontainer">
                        <a class="item">
                            {{$blogtotall}} Posts encontrados
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
<section>
    <div class="containerr">
        <div class="card-column column-0">
            @foreach($blogs as $value)
            <div class="card card-color-0">
                <input type="hidden" name="id" value="{{$value->id}}">
                <div class="border"></div>
                <img src="{{ url('storage/blog/' .$value->img)}}" />
                <div style="display: none;" id="text{{$value->id}}">

                    <h1 class="tituloh1" id="titulo">{{$value->titulo}}</h1>
                    <p id="data">{{$value->created_at}}</p>
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
<div class="bermaiiis"><br>
                    <a href="{{route('previewBlog',$value)}}" class="bermais">Ler Mais</a>
                </div></div>
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
