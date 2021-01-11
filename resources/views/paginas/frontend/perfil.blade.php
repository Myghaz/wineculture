@extends("paginas.frontend.layout")
@section('title', 'Perfil')
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/perfil.css') }}">
<body>
    @section('content')
    <div class="main-content" style="margin-bottom: 100px;">
        <!-- Top navbar -->

        <!-- Header -->
        <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-7 col-md-10">
                        <h1 class="display-2 text-white">Olá {{Auth::user()->name}}</h1>
                        <p class="text-white mt-0 mb-5">Este é o seu perfil. Aqui pode consultar os seus dados pessoais.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">

                                        @if (Auth::user()->img == "Sem Imagem")
                                        <img src="/assets/img/users/sem_imagem.jpg" cclass="rounded-circle" alt="{{Auth::user()->name}} {{Auth::user()->apelido}}">
                                        @else
                                        <img src="/assets/img/users/{{Auth::user()->img}}" class="rounded-circle" alt="{{Auth::user()->name}} {{Auth::user()->apelido}}">
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">

                        </div>
                        <div class="card-body pt-0 pt-md-4">
                            <div class="row">
                                <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                        <div>
                                            <span class="heading">{{$blogs}}</span>
                                            <span class="description">Blogs</span>
                                        </div>
                                        <div>
                                            <span class="heading">{{$receitas}}</span>
                                            <span class="description">Receitas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3>
                                    {{Auth::user()->name}} {{Auth::user()->apelido}}<span class="font-weight-light"></span>
                                </h3>
                                <div class="h5 font-weight-300">
                                    <i class="ni location_pin mr-2"></i>{{Auth::user()->pais}}
                                </div>
                                <hr class="my-4">
                                <p>Membro desde: {{Auth::user()->created_at}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 order-xl-1">
                    <div class="card bg-secondary">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Conta</h3>
                                </div>

                            </div>
                        </div>
                        <div style="background-color: white;" class="card-body">
                            <form action="{{route('perfil_frontend_store')}}" method="POST">
                                {{csrf_field()}}
                                <h6 class="heading-small text-muted mb-4">Informação do Utilizador</h6>
                                <div class="pl-lg-4">
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">Email</label>
                                                <input type="email" id="input-email" class="form-control form-control-alternative" readonly value="{{Auth::user()->email}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-nome">Nome</label>
                                                <input type="text" id="input-nome" class="form-control form-control-alternative" readonly placeholder="{{Auth::user()->name}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-apelido">Apelido Nome</label>
                                                <input type="text" id="input-apelido" class="form-control form-control-alternative" readonly placeholder="{{Auth::user()->apelido}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <!-- Address -->
                                <h6 class="heading-small text-muted mb-4">Outros Dados</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-nasci">Data de Nascimento</label>
                                                <input name="data_nasc" type="date" id="input-nasci" class="form-control form-control-alternative" placeholder="{{Auth::user()->data_nasc}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-genero">Género</label>
                                                <select name="genero" class="form-control" id="input-genero">
                                                    <option selected disabled value="Nao Revelar">Não Revelar</option>
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Feminino">Feminino</option>
                                                    <option value="Nao Revelar">Não Revelar</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-pais">Pais</label>
                                                <select name="pais" class="form-control" id="input-pais">
                                                    <option selected disabled value="{{Auth::user()->pais}}">{{Auth::user()->pais}}</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Espanha">Espanha</option>
                                                    <option value="França">França</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-registo">Data de Registo</label>
                                                <input type="text" id="input-registo" class="form-control form-control-alternative" readonly placeholder="{{Auth::user()->created_at}}">
                                                <br>
                                                <button type="submit" class="btn btn-info">Editar Perfil</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection