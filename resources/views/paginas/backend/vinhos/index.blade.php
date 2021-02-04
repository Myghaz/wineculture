@extends ('layouts.backend.admin')
@section('title', 'Vinhos')

@section('content')
<div class="content-wrapper">
<div class="content">
<div class="row">
  <div class="row tabelass" style="width:100%">
    <div class="col-12">
      <div class="card card-table-border-none" id="vinhosa">
        <div class="card-header justify-content-between">
          <h2 id="titulotable">Tabela de Vinhos</h2>
        </div>
        <div class="card-body pt-0 pb-5">
          <table id="tablevinhos" class="ui celled table" style="width:100%">
            <thead id="tablevinhosthead">
              <tr>
                <th class="d-none d-lg-table-cell">Imagem</th>
                <th class="d-none d-lg-table-cell">Nome</th>
                <th class="d-none d-lg-table-cell">Categoria</th>
                <th class="d-none d-lg-table-cell">Produtor</th>
                <th class="d-none d-lg-table-cell">Região</th>
                <th class="d-none d-lg-table-cell">Options</th>
              </tr>
            </thead>
            <tbody>
              <tr id="trv">
                @foreach($vinhos as $key => $vinho)
                
                <td onclick="window.location.href = '{{ route('vinhos.show', $vinho) }}';" class="tdhover">
                  
                  @foreach($vinho_img as $key_img => $vinhos_img)
						        @if($vinhos_img->id == $vinho->img)
                      <img src="\storage\vinhos\{{$vinhos_img->img}}" style="width:65px; height:65px; object-fit: cover; object-position: 0% 90%;" class="rounded-circle w-45" alt=">{{$vinho->nome}}">
						        @endif
					        @endforeach
                </td>
                <td onclick="window.location.href = '{{ route('vinhos.show', $vinho) }}';" class="tdhover">{{$vinho->nome}}</td>
                @foreach($categorias as $key => $categoria)
                @if ($vinho->id_categoria == $categoria->id)
                <td onclick="window.location.href = '{{ route('vinhos.show', $vinho) }}';" class="tdhover">{{$categoria->nome}}</td>
                @endif
                @endforeach
                @foreach($users as $key => $user)
                @if ($vinho->id_produtor == $user->id)
                <td onclick="window.location.href = '{{ route('vinhos.show', $vinho) }}';" class="tdhover">{{$user->name}} {{$user->apelido}}</td>
                @endif
                @endforeach
                <td onclick="window.location.href = '{{ route('vinhos.show', $vinho) }}';" class="tdhover">{{$vinho->regiao}}</td>
                <td class="tdhover">
                  <a href="{{ route('vinhos.show', $vinho) }}" class="btn btn-xs btn-success btn-p"><i class="fas fa-eye fa-xs"></i></a>
                  <a href="{{ route('vinhos.edit', $vinho) }}" class="btn btn-xs btn-warning btn-p"><i class="fas fa-pen fa-xs"></i></a>
                  <button type="button" class="btn btn-xs btn-danger btn-p" data-toggle="modal" data-target="#deleteConfirmModal" data-route="{{ route('vinhos.destroy', $vinho) }}"><i class="fas fa-trash fa-xs"></i></button>
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
<script src="{{ URL::asset('assets\js\paginas\backend\vinhos.js') }}"></script>

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