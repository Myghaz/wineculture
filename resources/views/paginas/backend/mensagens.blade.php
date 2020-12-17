@extends ('layouts.backend.admin')
@section('title', 'Mensagens')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <!-- Top Statistics -->
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="card card-mini mb-4">
                        <div class="card-body cartao">
                            <h2 class="mb-1">{{ $totalmensagens }}</h2>
                            <p>Total de Perguntas</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card card-mini mb-4">
                        <div class="card-body cartao">
                            <h2 class="mb-1">wetrw</h2>
                            <p>Categorias</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card card-mini mb-4">
                        <div class="card-body cartao">
                            <h2 class="mb-1">71,503</h2>
                            <p>Nadinha</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card card-mini mb-4">
                        <div class="card-body cartao">
                            <h2 class="mb-1">NAda</h2>
                            <p>Produtos Totais (2020)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Recent Order Table -->
                <div class="card card-table-border-none" id="users">
                    <div class="card-header justify-content-between">
                        <h2>Mensagens</h2>
                    </div>
                    <div class="card-body pt-0 pb-5">
                        <table id="tablecontactos" class="ui celled table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th class="d-none d-lg-table-cell">Nome</th>
                                    <th class="d-none d-lg-table-cell">Email</th>
                                    <th class="d-none d-lg-table-cell">Assunto</th>
                                    <th class="d-none d-lg-table-cell">Mensagem</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($mensagens as $mensagem)
                                    <td class="d-none d-lg-table-cell">{{ $mensagem->id }}</td>
                                    <td class="d-none d-lg-table-cell">
                                            {{ $mensagem->name }}
                                        </td>
                                        <td class="d-none d-lg-table-cell">
                                            {{ $mensagem->email }}
                                        </td>
                                        <td class="d-none d-lg-table-cell">
                                            {{ $mensagem->assunto }}
                                        </td>
                                        <td class="d-none d-lg-table-cell">
                                            {{ $mensagem->mensagem }}
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
