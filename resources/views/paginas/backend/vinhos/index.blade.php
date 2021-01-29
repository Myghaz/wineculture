@extends ('layouts.backend.admin')
@section('title', 'Vinhos')

@section('content')
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
                <th>ID</th>
                <th class="d-none d-lg-table-cell">Imagem</th>
                <th>Nome</th>
                <th class="d-none d-lg-table-cell">Categoria</th>
                <th class="d-none d-lg-table-cell">Produtor</th>
                <th class="d-none d-lg-table-cell">Preco</th>
                <th class="d-none d-lg-table-cell">Stock</th>
                <th class="d-none d-lg-table-cell">Pais</th>
                <th class="d-none d-lg-table-cell">Options</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach($vinhos as $key => $vinho)
                <td>{{$vinho->id}}</td>
                <td>
                  
                  @foreach($vinho_img as $key_img => $vinhos_img)
						        @if($vinhos_img->id == $vinho->img)
                      <img src="\storage\vinhos\{{$vinhos_img->img}}" style="width:65px; height:65px; object-fit: cover; object-position: 0% 90%;" class="rounded-circle w-45" alt=">{{$vinho->nome}}">
						        @endif
					        @endforeach
                </td>
                <td>
                  <a class="text-dark" href="">{{$vinho->nome}}</a>
                </td>
                @foreach($categorias as $key => $categoria)
                @if ($vinho->id_categoria == $categoria->id)
                <td>
                  <a class="text-dark" href="">{{$categoria->nome}}</a>
                </td>
                @endif
                @endforeach
                @foreach($users as $key => $user)
                @if ($vinho->id_produtor == $user->id)
                <td>
                  <a class="text-dark" href="">{{$user->name}} {{$user->apelido}}</a>
                </td>
                @endif
                @endforeach
                <td>
                  <a class="text-dark" href="">{{number_format((float)$vinho->preco, 2, '.', '')}}€</a>
                </td>
                <td>
                  <a class="text-dark" href="">{{$vinho->stock}}</a>
                </td>
                <td>
                  <a class="text-dark" href="">{{$vinho->pais}}</a>
                </td>
                <td class="acoes">
                  <a href="{{ route('vinhos.show', $vinho) }}" class="btn btn-xs btn-primary btn-p"><i class="fas fa-eye fa-xs"></i></a>
                  <a href="{{ route('vinhos.edit', $vinho) }}" class="btn btn-xs btn-warning btn-p"><i class="fas fa-pen fa-xs"></i></a>
                  <form action="{{ route('vinhos.destroy', $vinho) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-xs btn-danger btn-p"><i class="fas fa-trash fa-xs"></i></button>
                  </form>
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
@endsection

@section("javascript")
<script src="{{ asset('assets\js\paginas\backend\vinhos.js') }}"></script>
@endsection