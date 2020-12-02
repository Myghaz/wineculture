<!doctype html>
<html>

<head>
    @section('title', 'Contactos')
    @include('includes.frontend.head')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/contactos.css') }}">
</head>

<body>
    @include('includes.frontend.navbar')
    @yield('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Contacte-nos:</h3>
                <h5>Telefone:</h5>
                <p><i class="fa fa-phone"></i>&nbsp;&nbsp;(+351) 244 830 010</p>
                <h5>Telemóvel:</h5>
                <p><i class="fa fa-phone">&nbsp;&nbsp;</i>967 830 010</p>
                <h5>Email:</h5>
                <p>
                    <i class="fa fa-envelope"></i>&nbsp;&nbsp;wineculture@wineculture.com
                </p>
                <h6>Segue-nos:</h6>
                <div class="icon">
                    <a class="icon" href="https://www.facebook.com"><i class="fa fa-facebook-square"></i></a>
                    <a class="icon" href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                    <a class="icon" href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
            <form id="form-registo" class="col-md-7" action="#">
                <div>
                    <div class="form-group">
                        <label for="primeiroNome">*Nome:</label>
                        <input type="text" class="form-control" id="campoNome" />
                        <span class="erro" id="msg-erro-nome">Campo nome é obrigatório</span><br />
                    </div>

                    <div class="form-group">
                        <label for="email">*Email:</label>
                        <input type="text" class="form-control" id="campoEmail" placeholder="exemplo@email.com" />
                        <span class="erro" id="msg-erro-email-invalida">Email inválido</span>
                        <span class="erro" id="msg-erro-email-obrigatoria">Campo email obrigatório!!</span><br />
                    </div>
                    <div class="form-group">
                        <label for="assunto">*Assunto:</label>
                        <input type="text" class="form-control" id="campoAssunto" />
                        <span class="erro" id="msg-erro-assunto">Campo assunto é obrigatório</span><br />
                    </div>

                    <div class="form-group">
                        <label for="comment">*Mensagem:</label>
                        <textarea class="form-control" rows="5" id="campoMensagem"></textarea>
                        <span class="erro" id="msg-erro-mensagem">Campo mensagem é obrigatório</span><br />
                    </div>
                    <div class="wrapper">
                        <input class="btn" type="submit" value="Submit" id="submit" />
                    </div>

                </div>
            </form>
        </div>
    </div>
    @include('includes.frontend.scripts')
    <script src="{{ URL::asset('assets/js/paginas/frontend/contactos.js') }}"></script>
</body>
</html>