@extends("paginas.frontend.layout")

@section('title', 'Contactos')

@section('links')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/contactos.css') }}">
@endsection

@section('content')
    <div class="container">
        <div id="rowcontactos" class="row">
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
            <form method="POST" role="form" id="form-registo" class="col-md-8 mt-4 cenas"
                action="{{ route('contactos_frontend_store') }}">
                @csrf
                <div>
                    <div class="form-group campo">
                        <input type="text" name="name" class="form-control @error('name') border-bottom border-danger @enderror" value="{{ old('name') }}" id="campoNome"
                            placeholder="&#xf007;&nbsp; Nome" />
                            @error('name')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                    </div>

                    <div class="form-group campo">
                        <input type="text" name="email" class="form-control @error('email') border-bottom border-danger @enderror" value="{{ old('email') }}" id="campoEmail"
                            placeholder="&#xf1fa; Email" />
                            @error('email')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="form-group campo">
                        <input type="text" name="assunto" class="form-control @error('assunto') border-bottom border-danger @enderror" value="{{ old('assunto') }}"
                            id="campoAssunto" placeholder="&#xf02d; Assunto" />
                            @error('assunto')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                    </div>

                    <div class="form-group mequie">
                        <textarea type="text" class="form-control bruv @error('mensagem') border-bottom border-danger @enderror" name="mensagem" rows="5" id="campoMensagem"
                            placeholder="&#xf0e0; Mensagem">{{ Request::old('mensagem') }}</textarea>
                            @error('mensagem')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                    </div>
                    <div>
                        <button class="form-btn dx" type="submit">Submeter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@section('javascript')
    <script src="{{ URL::asset('assets/js/paginas/frontend/contactos.js') }}"></script>
@endsection
@endsection
