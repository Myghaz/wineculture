@extends("paginas.frontend.layout")

@section('title', 'FAQ')

@section('links')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.7/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.7/dist/semantic.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/faq.css') }}">
@endsection

@section('content')
    <div class="bannerrrr">
        <img class="img-fluid banner" src="{{ URL::asset('assets/img/paginas/frontend/faq-banner.jpg') }}" alt="banner">
    </div>
    <div class="ui grid">
        <div class="ui large breadcrumb">
            <a class="section">Home</a>
            <i class="right chevron icon divider"></i>
            <a class="section">Registration</a>
            <i class="right chevron icon divider"></i>
            <div class="active section">Personal Information</div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 perguntas main">
                @foreach ($categorias as $categoria)
                    <a>
                        <h1 class="categoria">{{ $categoria->categoria }}</h1>
                    </a>
                    @foreach ($perguntas as $pergunta)
                        @if ($pergunta->categoria_id == $categoria->id)
                            <div class="ui styled fluid accordion perguntacontainer">
                                <div class="title pergunta">
                                    <i class="dropdown icon"></i>
                                    {{ $pergunta->pergunta }}
                                </div>
                                <div class="content">
                                    <p class="transition hidden resposta">{!! $pergunta->resposta !!}</p>
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

    <script>
        $('.ui.accordion')
            .accordion();

    </script>

@endsection
@section('javascript')
@endsection
