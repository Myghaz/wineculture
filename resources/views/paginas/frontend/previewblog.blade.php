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
            <img class="class2" src="{{ url('assets/img/paginas/frontend/blog/' .$previewblog->img)}}" ></img>
                <div class="text">
                    <h1>{{$previewblog->titulo}}</h1>
                    <p>Publicado por <em>{{$blogs->autor}}</em> | Publicado em <em>{{$blogs->data}}</em></p>
                    <p><big><strong>{{$blogs->preview}}</strong></big></p>
                    <br>
                    <p><big>{{$blogs->descricao}}</big></p>
                </div>
                <div class="bnt">
                    <a href="/blog" role="button" class="btn btn-default">Voltar á Página Inicial</a>

                     </div>
    </div>
    </body>
        @include('includes.frontend.footer')
</html>
