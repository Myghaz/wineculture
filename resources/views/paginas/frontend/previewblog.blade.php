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
                    <p>Publicado por <em>{{$previewblog->autor}}</em> | Publicado em <em>{{$previewblog->data}}</em></p>
                    <p><big><strong>{{$previewblog->preview}}</strong></big></p>
                    <br>
                    <p><big>{{$previewblog->p1}}</big></p>
                    <br>
                    <p><big>{{$previewblog->p2}}</big></p>
                    <br>
                    <p><big>{{$previewblog->p3}}</big></p>
                    <br>
                    <p><big>{{$previewblog->p4}}</big></p>
                    <br>
                    <p><big>{{$previewblog->p5}}</big></p>
                    <br>
                    <p><big>{{$previewblog->p6}}</big></p>
                    <br>
                    <p><big>{{$previewblog->p7}}</big></p>
                    <br>
                    <p><big>{{$previewblog->p8}}</big></p>
                    <br>
                    <p><big>{{$previewblog->p9}}</big></p>
                    <br>
                    <p><big>{{$previewblog->p10}}</big></p>
                    <br>
                    <p><big>{{$previewblog->p11}}</big></p>
                </div>
                <div class="bnt">
                    <a href="/blog" role="button" class="btn btn-default">Voltar á Página Inicial</a>

                     </div>
    </div>
    <br>
    <br>
    <br>

    </body>
        @include('includes.frontend.footer')
</html>
