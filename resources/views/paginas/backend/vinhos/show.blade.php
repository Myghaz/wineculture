@extends ('layouts.backend.admin')
@section('title', 'Vinhos')

@section('content')
<div class="content-wrapper">
  <div class="content">
    <br>
      
      @if (session('status'))
      <div class="alert alert-success">
        <strong>{{ session('status') }}</strong>
      </div>
      @endif

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Nome do vinho</label>
        <input type="text" readonly class="form-control" id="exampleFormControlTextarea1" name="nome" value="{{$vinho->nome}}">
      </div>
      
      <div class="form-group">
        <label for="exampleFormControlTextarea2">Produtor</label>
        @foreach($users as $key => $user)
          @if ($vinho->id_produtor == $user->id)
            <input type="text" readonly class="form-control" id="exampleFormControlTextarea2" name="produtor" value="{{$user->name}} {{$user->apelido}}">
          @endif
        @endforeach
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea3">Categoria</label>
        @foreach($categorias as $key => $categoria)
          @if ($vinho->id_categoria == $categoria->id)
            <input type="text" readonly class="form-control" id="exampleFormControlTextarea3" name="produtor" value="{{$categoria->nome}}">
          @endif
        @endforeach
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea readonly class="ckeditor form-control" id="exampleFormControlTextarea1" rows="6" name="descricao">{{$vinho->descricao}}</textarea>
      </div>

      <div class="form-row">
        <div class="col-md-4 mb-3">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Preço</label>
          <input type="text" readonly class="form-control" name="nome" value="{{number_format((float)$vinho->preco, 2, '.', '')}}">
        </div>
        </div>

        <div class="col-md-4 mb-3">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">País</label>
          <input type="text" readonly class="form-control" name="nome" value="{{$vinho->pais}}">
        </div>
        </div>
        
        <div class="col-md-4 mb-2">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Região</label>
          <input type="text" readonly class="form-control" name="nome" value="{{$vinho->regiao}}">
        </div>
        </div>

        <div class="col-md-4 mb-3">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Quantidade Cilindrica</label>
          <input type="number" readonly class="form-control" name="nome" value="{{$vinho->qnt_cl}}">
        </div>
        </div>

        <div class="col-md-4 mb-3">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Percentagem Álcool</label>
          <input type="number" readonly class="form-control" name="nome" value="{{$vinho->perct_alco}}">
        </div>
        </div>

      </div>
  </div>
</div>

  @endsection
