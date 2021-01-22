@extends("paginas.frontend.layout")

@section('title', 'FAQ')

@section('links')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/faq.css') }}">
@endsection

@section('content')
    <div class="bannerrrr">
        <img class="img-fluid banner" src="{{ URL::asset('assets/img/paginas/frontend/faq-banner.jpg') }}" alt="banner">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 d-none d-lg-block d-xl-none xld-none d-xl-block categorias sticky-top">
                <ul class="list-unstyled">
                    @foreach ($categorias as $key => $categoria)
                        <li><a href="#{{ $categoria->categoria }}">{{ $categoria->categoria }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-10 perguntas main">
                @foreach ($categorias as $categoria)
                    <a id="{{ $categoria->categoria }}">
                        <h1 class="categoria">{{ $categoria->categoria }}</h1>
                    </a>
                    @foreach ($perguntas as $pergunta)
                        @if ($pergunta->categoria_id == $categoria->id)
                            <div class="grandecena">
                                <a class="btn pergunta h3" data-toggle="collapse" href="#a{{ $pergunta->id }}" role="button"
                                    aria-expanded="false" aria-controls="a{{ $pergunta->id }}">
                                    {{ $pergunta->pergunta }}
                                </a>
                                <div class="collapse resposta" id="a{{ $pergunta->id }}">
                                    <div class="resposta1">
                                        {!! $pergunta->resposta !!}
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
    <!--SCRIPTS-->
    <script>
        var shiftWindow = function() {
            scrollBy(0, -70)
        };
        if (location.hash) shiftWindow();
        window.addEventListener("hashchange", shiftWindow);

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

@endsection
@section('javascript')
@endsection
