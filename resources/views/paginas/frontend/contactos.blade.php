@extends("paginas.frontend.layout")

@section('title', 'Contactos')

@section('links')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/contactos.css') }}">
@endsection

@section('content')

    <div class="container">
        @if ($errors->any())
            @include ('partials.errors')
        @endif
        @if (!empty(session('success')))
            @include ('partials.success')
        @endif
        <div class="row">
            <div class="col-md-3">
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
            <form method="POST" role="form" id="form-registo" class="col-md-8 cenas"
                action="{{ route('contactos_frontend_store') }}">
                @csrf
                <div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="campoNome"
                            placeholder="&#xf007;&nbsp; Nome" />
                    </div>

                    <div class="form-group">
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}" id="campoEmail"
                            placeholder="&#xf1fa; Email" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="assunto" class="form-control" value="{{ old('assunto') }}"
                            id="campoAssunto" placeholder="&#xf02d; Assunto" />
                    </div>

                    <div class="form-group mequie">
                        <textarea type="text" class="form-control caralho" name="mensagem" rows="5" id="campoMensagem"
                            placeholder="&#xf0e0; Mensagem">{{ Request::old('mensagem') }}</textarea>
                    </div>
                    <div>
                        <button class="form-btn dx merda" type="submit">Submeter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@section('javascript')
    <script src="{{ URL::asset('assets/js/paginas/frontend/contactos.js') }}"></script>
@endsection
@endsection
