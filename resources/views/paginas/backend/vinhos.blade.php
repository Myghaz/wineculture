@extends ('layouts.backend.admin')
@section('title', 'Blog')

@section('content')
<div class="row">
  <div class="row tabelas">
    <div class="col-12">
      <div class="card card-table-border-none" id="vinhos">
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
              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach($vinhos as $key => $vinho)
                <td>{{$vinho->id}}</td>
                <td>
                  @foreach($vinhosimg as $key => $vinhoimg)
                  @if ($vinho->id == $vinhoimg->id_vinho)
                  <img src="/storage/vinhos/{{$vinhoimg->img}}" class="rounded-circle w-45" alt=">{{$vinho->nome}}">
                  @else
               
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
                  <a class="text-dark" href="">{{$user->nome}}</a>
                </td>
                @endif
                @endforeach
                <td>
                  <a class="text-dark" href="">{{$vinho->preco}}</a>
                </td>
                <td>
                  <a class="text-dark" href="">{{$vinho->preco}}</a>
                </td>
                <td>
                  <a class="text-dark" href="">{{$vinho->stock}}</a>
                </td>
                <td>
                  <a class="text-dark" href="">{{$vinho->pais}}</a>
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