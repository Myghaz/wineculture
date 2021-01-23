@extends ('layouts.backend.admin')
@section('title', 'Blog')

@section('content')
<div class="content-wrapper">
  <div class="content">
    <!-- Top Statistics -->

    <div class="row">
      @if (count($blogs))
      <div class="col-12">
        <!-- Recent Order Table -->
        <div class="card card-table-border-none" id="recent-orders">
          <div class="card-header justify-content-between">
            <h2>Tabela de Posts</h2>
          </div>
          <div class="card-body pt-0 pb-5">
            <table id="tabelablog" class="ui celled table" style="width:100%">
              <thead>
                <tr>
                  <th class="d-none d-lg-table-cell">Imagem</th>
                  <th class="d-none d-lg-table-cell">Titulo</th>
                  <th class="d-none d-lg-table-cell">Categoria</th>
                  <th class="d-none d-lg-table-cell">Autor</th>
                  <th class="d-none d-lg-table-cell">Data</th>
                  <th class="d-none d-lg-table-cell">Ações</th>
                </tr>
              </thead>
              <tbody>

                  @foreach($blogs as $blog)
                  <tr id="trv">
                  <td class="tdhover">
                    <img src="{{asset('storage/blog/'.$blog->img) }}" style="width:65px; height:65px; object-fit: cover;  object-position: 0% 90%;" class="rounded-circle w-45 tdhover" alt="{{$blog->nome}}">
                  </td>
                  <td class="tdhover" onclick="window.location.href = '{{ route('blog.show', $blog) }}';" >{{$blog->titulo}}</td>
                  <td class="d-none d-lg-table-cell tdhover" onclick="window.location.href = '{{ route('blog.show', $blog) }}';"  >{{ $blog->categoria->name }}</td>
                  <td class="d-none d-lg-table-cell tdhover" onclick="window.location.href = '{{ route('blog.show', $blog) }}';" >{{$blog->user->name}} {{$blog->user->apelido}}</td>
                  <td class="d-none d-lg-table-cell tdhover" onclick="window.location.href = '{{ route('blog.show', $blog) }}';"  >{{ date('d-m-Y h:m', strtotime($blog->created_at))}}</td>

                  <td class="tdhover">
                    <a href="{{ route('blog.show', $blog) }}"
                        class="btn btn-xs btn-success btn-p"><i
                            class="fas fa-eye fa-xs"></i></a>
                    <a href="{{ route('blog.edit', $blog) }}"
                        class="btn btn-xs btn-warning btn-p"><i
                            class="fas fa-pen fa-xs"></i></a>
                    <button type="button" class="btn btn-xs btn-danger btn-p"
                        data-toggle="modal" data-target="#deleteConfirmModal"
                        data-route="{{ route('blog.destroy', $blog) }}"><i
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
      <h6>Sem Posts Registrados</h6>
      @endif
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
  <script src="{{ asset('assets\js\paginas\backend\blog.js') }}"></script>
  @endsection
