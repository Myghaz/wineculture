@extends ('layouts.backend.admin')
@section('title', 'Categorias FAQ')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <!-- Recent Order Table -->
                    <div class="card card-table-border-none" id="users">
                        <div class="card-header justify-content-between">
                            <h2>Categorias de Perguntas</h2>
                        </div>
                        <div class="card-body pt-0 pb-5">
                            <table id="tablecategoriaFAQ" class="ui celled table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="d-none d-lg-table-cell">Categoria</th>
                                        <th class="d-none d-lg-table-cell">Descrição</th>
                                        <th class="d-none d-lg-table-cell">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorias as $categoria)
                                        <tr id="trv">
                                            <td onclick="window.location.href = '{{ route('categoriasFAQ.show', ['categoria' => $categoria]) }}';"
                                                class="tdhover">
                                                {{ $categoria->categoria }}
                                            </td>
                                            <td onclick="window.location.href = '{{ route('categoriasFAQ.show', ['categoria' => $categoria]) }}';"
                                                class="tdhover">
                                                {{ $categoria->descricao }}
                                            </td>
                                            <td class="tdhover">
                                                <a href="{{ route('categoriasFAQ.show', $categoria) }}"
                                                    class="btn btn-xs btn-success btn-p"><i
                                                        class="fas fa-eye fa-xs"></i></a>
                                                <a href="{{ route('categoriasFAQ.edit', $categoria) }}"
                                                    class="btn btn-xs btn-warning btn-p"><i
                                                        class="fas fa-pen fa-xs"></i></a>
                                                <button type="button" class="btn btn-xs btn-danger btn-p"
                                                    data-toggle="modal" data-target="#deleteConfirmModal"
                                                    data-route="{{ route('categoriasFAQ.destroy', $categoria) }}"><i
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
        </div>
    </div>
    <script src="{{ asset('assets\js\paginas\backend\categoriaFAQ.js') }}"></script>
    <div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmModalTitle"
        aria-hidden="true">
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
