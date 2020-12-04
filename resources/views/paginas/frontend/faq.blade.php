<!doctype html>
<html>

<head>
    @section('title', 'FAQ')
    @include('includes.frontend.head')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/faq.css') }}">
</head>

<body>
    @include('includes.frontend.navbar')
    <div>
        <img class="img-fluid banner" src="{{ URL::asset('assets/img/paginas/frontend/faq-banner.jpg') }}" alt="banner">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 d-none d-lg-block d-xl-none xld-none d-xl-block categorias sticky-top">
                <ul class="list-unstyled">
                    <li>Categoria 1</li>
                    <li>Categoria 2</li>
                    <li>Categoria 3</li>
                    <li>Categoria 4</li>
                </ul>
            </div>

            <select
                class="form-control form-control-lg d-block d-sm-none d-none d-sm-block d-md-none d-none d-md-block d-lg-none dropdown">
                <option>Categoria 1</option>
                <option>Categoria 2</option>
                <option>Categoria 3</option>
                <option>Categoria 4</option>
            </select>

            <div class="col-md-10 perguntas main">
                <div class="categoria">
                    <h1>Categoria 1</h1>
                    <a class="btn pergunta h3" data-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        Pergunta 1
                    </a>
                    <div class="resposta" id="collapseExample">
                        <div class="resposta1">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente
                            ea proident.
                        </div>
                    </div>
                    <br>
                    <a class="btn pergunta h3" data-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        Pergunta 2
                    </a>
                    <div class="resposta" id="collapseExample">
                        <div class="resposta1">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente
                            ea proident.
                        </div>
                    </div>
                    <br>
                    <a class="btn pergunta h3" data-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        Pergunta 3
                    </a>

                    <div class="resposta" id="collapseExample">
                        <div class="resposta1">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente
                            ea proident.
                        </div>
                    </div>
                    <br>
                    <a class="btn pergunta h3" data-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        Pergunta 4
                    </a>
                    <br>
                    <div class="resposta" id="collapseExample">
                        <div class="resposta1">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente
                            ea proident.
                        </div>
                    </div>
                </div>
                <div class="categoria">
                    <h1>Categoria 1</h1>
                    <a class="btn pergunta h3" data-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        Pergunta 1
                    </a>
                    <div class="resposta" id="collapseExample">
                        <div class="resposta1">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente
                            ea proident.
                        </div>
                    </div>
                    <br>
                    <a class="btn pergunta h3" data-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        Pergunta 2
                    </a>
                    <div class="resposta" id="collapseExample">
                        <div class="resposta1">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente
                            ea proident.
                        </div>
                    </div>
                    <br>
                    <a class="btn pergunta h3" data-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        Pergunta 3
                    </a>

                    <div class="resposta" id="collapseExample">
                        <div class="resposta1">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente
                            ea proident.
                        </div>
                    </div>
                    <br>
                    <a class="btn pergunta h3" data-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        Pergunta 4
                    </a>
                    <br>
                    <div class="resposta" id="collapseExample">
                        <div class="resposta1">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente
                            ea proident.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--SCRIPTS-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            var alterClass = function () {
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
            $(window).resize(function () {
                alterClass();
            });
            //Fire it when the page first loads:
            alterClass();
        });
    </script>
</body>

</html>
