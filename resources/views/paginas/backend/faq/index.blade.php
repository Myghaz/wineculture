@extends ('layouts.backend.admin')
@section('title', 'FAQ')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <!-- Top Statistics -->
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="card card-mini mb-4">
                        <div class="card-body cartao">
                            <h2 class="mb-1">{{ $totalperguntas }}</h2>
                            <p>Total de Perguntas</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card card-mini mb-4">
                        <div class="card-body cartao">
                            <h2 class="mb-1">{{ $totalcategorias }}</h2>
                            <p>Categorias</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Recent Order Table -->
                    <div class="card card-table-border-none" id="users">
                        <div class="card-header justify-content-between">
                            <h2>Perguntas Frequentes</h2>
                        </div>
                        <div class="card-body pt-0 pb-5">
                            <table id="tablefaq" class="ui celled table tamanho">
                                <thead>
                                    <tr>
                                        <th class="d-none d-lg-table-cell">Pergunta</th>
                                        <th class="d-none d-lg-table-cell">Resposta</th>
                                        <th class="w-2">Categoria</th>
                                        <th class="acoes">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($perguntas as $pergunta)
                                    <tr  id="trv" onclick="window.location.href = '{{ route('faq.show', ['pergunta' => $pergunta])}}';">
                                    <td>{{$pergunta->pergunta }}</td>
                                    <td>{{$pergunta->resposta }}</td>
                                    <td>{{$pergunta->categoria }}</a></td>
                                    <td class="acoes">
                                        <a href="{{ route('faq.show', ['pergunta' => $pergunta]) }}" class="btn btn-xs btn-success btn-p"><i class="fas fa-eye fa-xs"></i></a>
                                        <a href="{{ route('faq.edit', $pergunta) }}" class="btn btn-xs btn-warning btn-p"><i class="fas fa-pen fa-xs"></i></a>
                                        <button type="button" class="btn btn-xs btn-danger btn-p" data-toggle="modal" data-target="#deleteConfirmModal" data-route="{{ route('faq.destroy', $pergunta) }}"><i class="fas fa-trash fa-xs" data-toggle="tooltip" data-placement="top" title="Eliminar"></i></button>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('assets\js\paginas\backend\faq.js') }}"></script>
        <div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog"
            aria-labelledby="deleteConfirmModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Eliminar registo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Tem a certeza que deseja eliminar este registo?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <form method="POST" action="#" role="form" class="inline" id="formDelete">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            //triggered when modal is about to be shown
            $('#deleteConfirmModal').on('show.bs.modal', function(e) {

                //get data-route attribute of the clicked element
                var route = $(e.relatedTarget).data('route');

                //populate the textbox
                $('#formDelete').attr("action", route);
            });

        </script>
    @endsection
