<!doctype html>
<html>

<head>
    @section('title', 'FAQ')
    @include('includes.frontend.head')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/previewblog.css') }}">
</head>

<body>
    @include('includes.frontend.navbar')
    <div class="container thumbs">
      @foreach($previewblog as $value)

        <div class="row">
            <div class="card">
              <h2>{{$value->titulo}}</h2>
              <h5>{{$value->data}}</h5>
              <img src="{{ url('assets/img/paginas/frontend/blog/' .$value->img)}}" style="height:200px;" class="img"></img>
                <p><b>{{$value->preview}}</b></p>
                <br>
                <p>{{$value->descricao}}</p>
                <br>
                  <a href="/blog" role="button" class="btn btn-default">Voltar á Página Inicial</a>
            </div>
          </div>
          </div>
        </div>
        @endforeach
    </div>
    </body>
@include('includes.frontend.footer')
</html>
