@extends ('layouts.backend.admin')
@section('title', 'Categorias Blog')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                @if (count($categories))
                <div class="col-12">
                    <!-- Recent Order Table -->
                    <div class="card card-table-border-none" id="posts">
                        <div class="card-header justify-content-between">
                            <h2>Categorias de Posts</h2>
                        </div>
                        <div class="card-body pt-0 pb-5">
                            <table id="tablecategoriablog" class="ui celled table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="d-none d-lg-table-cell">Imagem</th>
                                        <th class="d-none d-lg-table-cell">Categoria</th>
                                        <th class="d-none d-lg-table-cell">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr id="trv">
                                            <td class="tdhover">
                                                <img src="{{asset('storage/categorias/'.$category->img) }}" style="width:65px; height:65px; object-fit: cover;  object-position: 0% 90%;" class="rounded-circle w-45 tdhover" alt="{{$category->nome}}">
                                              </td>
                                            <td onclick="window.location.href = '{{ route('categoriasblog.show', $category) }}';" class="tdhover">
                                                {{ $category->name }}
                                            </td>
                                            <td class="tdhover">
                                                <a href="{{ route('categoriasblog.show', $category) }}"
                                                    class="btn btn-xs btn-success btn-p"><i
                                                        class="fas fa-eye fa-xs"></i></a>
                                                <a href="{{ route('categoriasblog.edit', $category) }}"
                                                    class="btn btn-xs btn-warning btn-p"><i
                                                        class="fas fa-pen fa-xs"></i></a>
                                                <button type="button" class="btn btn-xs btn-danger btn-p"
                                                    data-toggle="modal" data-target="#deleteConfirmModal"
                                                    data-route="{{ route('categoriasblog.destroy', $category) }}"><i
                                                        class="fas fa-trash fa-xs" data-toggle="tooltip"
                                                        data-placement="top" title="Eliminar"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
                        </div>
                    </div>
                </div>
                @else
      <h6>Sem categorias de posts Registrados</h6>
      @endif
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
    <script src="{{ asset('assets\js\paginas\backend\categoriablog.js') }}"></script>
@endsection
