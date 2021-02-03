@extends("paginas.frontend.layout")

@section('title', $blogs->titulo)

@section("links")
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/previewblog.css') }}">
@endsection

@section("content")

<div class="all">
    <img class="class2" src="{{ url('assets/img/paginas/frontend/blog/' .$blogs->img)}}"></img>
    <div class="text">
        <h1>{{$blogs->titulo}}</h1>
        <p>Publicado por <em>{{$blogs->autor}}</em> | Publicado em <em>{{$blogs->data}}</em></p>
        <p><big><strong>{{$blogs->preview}}</strong></big></p>
        {!!$blogs->descricao!!}
    </div>
    <div class="bnt">
        <a href="/blog" role="button" class="btn btn-default">Voltar á Página Inicial</a>

    </div>
</div>
<br>
<br>
<br>

@endsection
