@extends("paginas.frontend.layout")

@section('title', 'FAQ')

@section("links")
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
                <a id="Conta">
                    <h1>Conta</h1>
                </a>
                @foreach ($perguntas_conta as $key => $pergunta_conta)
                    <div class="categoria">
                        <a class="btn pergunta h3" data-toggle="collapse" href="#a{{ $pergunta_conta->id }}" role="button"
                            aria-expanded="false" aria-controls="a{{ $pergunta_conta->id }}">
                            {{ $pergunta_conta->pergunta }}
                        </a>
                        <div class="collapse resposta" id="a{{ $pergunta_conta->id }}">
                            <div class="resposta1">
                                {!! $pergunta_conta->resposta !!}
                            </div>
                        </div>
                    </div>
                @endforeach
                <a id="Encomenda">
                    <h1>Encomenda</h1>
                </a>
                @foreach ($perguntas_encomenda as $key => $pergunta_encomenda)
                    <div class="categoria">
                        <a class="btn pergunta h3" data-toggle="collapse" href="#b{{ $pergunta_encomenda->id }}"
                            role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{ $pergunta_encomenda->pergunta }}
                        </a>
                        <div class="collapse resposta" id="b{{ $pergunta_encomenda->id }}">
                            <div class="resposta1">
                                {!! $pergunta_encomenda->resposta !!}
                            </div>
                        </div>
                    </div>
                @endforeach
                <a id="Pagamento">
                    <h1>Pagamento</h1>
                </a>
                @foreach ($perguntas_pagamento as $key => $pergunta_pagamento)
                    <div class="categoria">
                        <a class="btn pergunta h3" data-toggle="collapse" href="#c{{ $pergunta_pagamento->id }}"
                            role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{ $pergunta_pagamento->pergunta }}
                        </a>
                        <div class="collapse resposta" id="c{{ $pergunta_pagamento->id }}">
                            <div class="resposta1">
                                {!! $pergunta_pagamento->resposta !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <br>
    <br>
    <!--SCRIPTS-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
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
