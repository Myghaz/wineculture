<!doctype html>
<html>

<head>
    @section('title', 'FAQ')
    @include('includes.frontend.head')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/blog.css') }}">
</head>

<body>
    @include('includes.frontend.navbar')
    <div class="container thumbs">
      @foreach($previewblog as $value)
        <div class="thumbnail">
        <img src="{{ url('assets/img/paginas/frontend/blog/' .$value->img)}}" alt="" class="img-responsive"/>
          <div class="caption">
            <h3 class=""> Titulo:{{$value->titulo}}</h3>
            <h4 class="">Data:{{$value->data}}</h4>
            <p>Preview:{{$value->preview}}</p>
            <h1>Descrição:{{$value->descricao}}</h1>
            <div class="btn-toolbar text-center">
              <a href="/blog" role="button" class="btn btn-primary pull-right">Voltar á Página Anterior</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>


</body>
@include('includes.frontend.footer')
</html>
