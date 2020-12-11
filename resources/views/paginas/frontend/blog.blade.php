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
      @foreach($blogs as $value)
        <div class="thumbnail">
        <img src="{{ url('assets/img/paginas/frontend/blog/' .$value->img)}}" alt="" class="img-responsive"/>
          <div class="caption">
            <h3 class="">{{$value->titulo}}</h3>
            <h4 class="">{{$value->data}}</h4>
            <p>{{$value->preview}}</p>
            <h1>{{$value->descricao}}</h1>
            <div class="btn-toolbar text-center">
              <a href="previewBlog.html" role="button" class="btn btn-primary pull-right">Ver Mais</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>


</body>
@include('includes.frontend.footer')
</html>
