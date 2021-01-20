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
                                        <th class="d-none d-lg-table-cell">Nome</th>
                                        <th class="d-none d-lg-table-cell">Email</th>
                                        <th class="d-none d-lg-table-cell">Assunto</th>
                                        <th class="d-none d-lg-table-cell">Mensagem</th>
                                        <th class="d-none d-lg-table-cell">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($mensagens as $mensagem)
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
                                            <td class="acoes">
                                                <a href="" class="btn btn-xs btn-success btn-p"><i
                                                        class="fas fa-eye fa-xs"></i></a>
                                                <button type="button" class="btn btn-xs btn-danger btn-p"
                                                    data-toggle="modal" data-target="#deleteConfirmModal"
                                                    data-route="{{ route('faq.destroy', $pergunta) }}"><i
                                                        class="fas fa-trash fa-xs" data-toggle="tooltip"
                                                        data-placement="top" title="Eliminar"></i></button>
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
