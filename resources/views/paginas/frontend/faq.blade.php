<!doctype html>
<html>

<head>
    @section('title', 'FAQ')
        @include('includes.frontend.head')
        @include('includes.frontend.navbar')
        <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/faq.css') }}">
    </head>

    <body>

        <div>
            <img class="img-fluid banner" src="{{ URL::asset('assets/img/paginas/frontend/faq-banner.jpg') }}" alt="banner">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 d-none d-lg-block d-xl-none xld-none d-xl-block categorias sticky-top">
                    <ul class="list-unstyled">
                        @foreach ($categorias as $key => $categoria)
                            <li>{{ $categoria->categoria }}</li>
                        @endforeach
                    </ul>
                </div>

                <select
                    class="form-control form-control-lg d-block d-sm-none d-none d-sm-block d-md-none d-none d-md-block d-lg-none dropdown">
                    @foreach ($categorias as $key => $categoria)
                        <option>{{ $categoria->categoria }}</option>
                    @endforeach
                </select>

                <div class="col-md-10 perguntas main">
                    <h1>Conta</h1>
                    @foreach ($perguntas_conta as $key => $pergunta_conta)
                        <div class="categoria">
                            <a class="btn pergunta h3" data-toggle="collapse" href="#a{{ $pergunta_conta->id }}"
                                role="button" aria-expanded="false" aria-controls="a{{ $pergunta_conta->id }}">
                                {{ $pergunta_conta->pergunta }}
                            </a>
                            <div class="collapse resposta" id="a{{ $pergunta_conta->id }}">
                                <div class="resposta1">
                                    {!! $pergunta_conta->resposta !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <h1>Encomenda</h1>
                    @foreach ($perguntas_encomenda as $key => $pergunta_encomenda)
                        <div class="categoria">
                            <a class="btn pergunta h3" data-toggle="collapse" href="#b{{ $pergunta_encomenda->id }}"
                                role="button" aria-expanded="false" aria-controls="collapseExample">
                                {{ $pergunta_encomenda->pergunta }}
                            </a>
                            <div class="resposta" id="b{{ $pergunta_encomenda->id }}">
                                <div class="resposta1">
                                    {!! $pergunta_encomenda->resposta !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <h1>Pagamento</h1>
                    @foreach ($perguntas_pagamento as $key => $pergunta_pagamento)
                        <div class="categoria">
                            <a class="btn pergunta h3" data-toggle="collapse" href="#c{{ $pergunta_pagamento->id }}"
                                role="button" aria-expanded="false" aria-controls="collapseExample">
                                {{ $pergunta_pagamento->pergunta }}
                            </a>
                            <div class="resposta" id="c{{ $pergunta_pagamento->id }}">
                                <div class="resposta1">
                                    {!! $pergunta_pagamento->resposta !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <h1>teste</h1>
                    @foreach ($perguntas_teste as $key => $pergunta_teste)
                        <div class="categoria">
                            <a class="btn pergunta h3" data-toggle="collapse" href="#c{{ $pergunta_teste->id }}"
                                role="button" aria-expanded="false" aria-controls="collapseExample">
                                {{ $pergunta_teste->pergunta }}
                            </a>
                            <div class="resposta" id="c{{ $pergunta_teste->id }}">
                                <div class="resposta1">
                                    {!! $pergunta_teste->resposta !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="red"></div>
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

        <script>
            $(document).ready(function() {
                var alterClass = function() {
                    var ww = document.body.clientWidth;
                    if (ww > 767) {
                        $('.resposta').removeClass('collapse');
                        $('.resposta1').removeClass('card card-body');
                        $('.pergunta').addClass('disabled');
                    } else if (ww <= 768) {
                        $('.resposta').addClass('collapse');
                        $('.resposta1').addClass('card card-body');
                        $('.pergunta').removeClass('disabled');
                    };
                };
                $(window).resize(function() {
                    alterClass();
                });
                //Fire it when the page first loads:
                alterClass();
            });

        </script>
        @include('includes.frontend.footer')
    </body>

    </html>
