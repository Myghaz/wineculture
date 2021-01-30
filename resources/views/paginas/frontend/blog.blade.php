@extends("paginas.frontend.layout")

@section('title', 'Blog')

@section("links")
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/blog.css') }}">
@endsection

@section("content")
<div class="row">
  <div class="column1">
    <div class="sideside">
        <button class="dropdrop-downdown">Data<i class="fa fa-caret-down"></i></button>
        <div class="dropdown-conta">
            @foreach ($blogs as $value)
            <a data-filter=".blog-{{$value->id}}">{{$value->created_at}}</a>
            @endforeach
        </div>
        <button class="dropdrop-downdown">Categorias<i class="fa fa-caret-down"></i></button>
        <div class="dropdown-conta">
            @foreach($categorias as $categoria)
            <a data-filter=".blog-{{$categoria->id}}">{{$categoria->name}}</a>@endforeach
        </div>
      </div>
  </div>
  <div class="column2">
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
</div>
@section("javascript")
<script src="{{ URL::asset('assets/js/paginas/frontend/blog.js') }}"></script>
@endsection
@endsection
