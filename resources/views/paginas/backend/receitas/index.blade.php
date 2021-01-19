@extends ('layouts.backend.admin')
@section('title', 'Dashboard')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <!-- Recent Order Table -->
                <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between">
                        <h2>Tabela de Receitas</h2>
                    </div>
                    <div class="card-body pt-0 pb-5">
                        <table id="tablereceitas" class="ui celled table" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="d-none d-lg-table-cell">Imagem</th>
                                    <th class="d-none d-lg-table-cell">Nome</th>
                                    <th class="d-none d-lg-table-cell">Categoria</th>
                                    <th class="d-none d-lg-table-cell">Utilizador</th>
                                    <th class="d-none d-lg-table-cell">Descrição</th>
                                    <th class="d-none d-lg-table-cell opcoes">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($receitas as $receita)
                                <tr>
                                <td class="d-none d-lg-table-cell"><img src="{{ Storage::url($receita->foto) }}" class="rounded-circle w-45" style="width: 60px; height: 60px; object-fit: cover;"></td>
                                    <td>
                                        <a class="text-dark" href="">{{ $receita->nome }}</a>
                                    </td>
                                    @foreach ($category_wines as $category_wine)
                                    @if ($receita->id_categoria == $category_wine->id)
                                    <td class="d-none d-lg-table-cell">{{ $category_wine->nome }}</td>
                                    @endif
                                    @endforeach
                                    @foreach ($Users as $User)
                                    @if ($receita->id_user == $User->id)
                                    <td class="d-none d-lg-table-cell">{{ $User->name }}
                                        {{ $User->apelido }}
                                    </td>
                                    @endif
                                    @endforeach
                                    <td>
                                        <a class="text-dark" href="">{{ $receita->descricao }}</a>
                                    </td>


                                    <td class="acoes">
                                        <a href="{{ route('receitas.show', $receita) }}" class="btn btn-xs btn-primary btn-p"><i class="fas fa-eye fa-xs"></i></a>
                                        <a href="{{ route('receitas.edit', $receita) }}" class="btn btn-xs btn-warning btn-p"><i class="fas fa-pen fa-xs"></i></a>
                                         <button type="button" class="btn btn-xs btn-danger btn-p"
                                    data-toggle="modal" data-target="#deleteConfirmModal"
                                    data-route="{{ route('receitas.destroy', $receita) }}"><i
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
<script src="{{ asset('assets\js\paginas\backend\receitas.js') }}"></script>

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
