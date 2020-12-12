<!doctype html>
<html>

<head>
    @section('title', 'FAQ')
    @include('includes.frontend.head')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/previewblog.css') }}">
    @include('includes.frontend.navbar')
</head>

<body>
    <div class="all">
    @foreach($previewblog as $value)
    <div class="imgs">
    <img src="{{ url('assets/img/paginas/frontend/blog/' .$value->img)}}" width="1300px" height="300px" ></img>
    </div>
    <br>
    <header>
        <h1>{{$value->titulo}}</h1>
        <p>Publicado por <em>{{$value->autor}}</em> | Publicado em <em>{{$value->data}}</em></p>
    </header>
    <br>
    <main>
        <p><big><strong>{{$value->preview}}</strong></big></p>
        <br>
        <p><big>{{$value->descricao}}</big></p>
    </main>
    <footer>
        <div class="buton">
        <a href="/blog" role="button" class="btn btn-default">Voltar á Página Inicial</a>
        </div>
    </footer>
    @endforeach
    </div>
    </body>
        @include('includes.frontend.footer')
</html>
