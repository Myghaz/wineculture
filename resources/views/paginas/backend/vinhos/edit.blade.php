@extends ('layouts.backend.admin')
@section('title', 'Vinho')

@section('content')
<div class="content-wrapper">
  <div class="content">
    <form action="{{route('vinhos.update', $vinho->id)}}" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
      @method('PUT')
      @if (session('status'))
      <div class="alert alert-success">
        <strong>{{ session('status') }}</strong>
      </div>
      @endif

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Nome do vinho</label>
        <input type="text" class="form-control" name="nome" value="{{$vinho->nome}}">
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">Categoria</label>
        <select class="form-control" id="exampleFormControlSelect1"  name="id_categoria">
            <option value="">Selecione uma Categoria</option>
            @foreach ($categorias as $categorias)
            <option @if ($vinho->id_categoria==$categorias->id) selected @endif value="{{$categorias->id}}"> {{$categorias->nome}}</option>
            @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Produtor</label>  
        <select class="form-control" id="exampleFormControlSelect1"  name="id_categoria">
          <option value="">Selecione um Produtor</option>
          @foreach($users as $key_user => $user)
					  @if($user->tipouser == 'Produtor')
              <option style="background-image:url('\storage\vinhos\1.jpg')" @if($vinho_produtor->id == $user->id) selected @endif value="{{$user->id}}">{{$user->name}} {{$user->apelido}}</option>
					  @endif
				  @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea class="ckeditor form-control" id="exampleFormControlTextarea1" rows="6" name="descricao">{{$vinho->descricao}}</textarea>
      </div>

      <div class="form-row">
        <div class="col-md-4 mb-3">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Preço</label>
          <input type="text" class="form-control" name="nome" value="{{number_format((float)$vinho->preco, 2, '.', '')}}">
        </div>
        </div>

        <div class="col-md-4 mb-3">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">País</label>
          <input type="text" class="form-control" name="nome" value="{{$vinho->pais}}">
        </div>
        </div>
        
        <div class="col-md-4 mb-2">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Região</label>
          <input type="text" class="form-control" name="nome" value="{{$vinho->regiao}}">
        </div>
        </div>

        <div class="col-md-4 mb-3">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Quantidade Cilindrica</label>
          <input type="number" class="form-control" name="nome" value="{{$vinho->qnt_cl}}">
        </div>
        </div>

        <div class="col-md-4 mb-3">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Percentagem Álcool</label>
          <input type="number" class="form-control" name="nome" value="{{$vinho->perct_alco}}">
        </div>
        </div>

      </div>
      
      <div class="form-group">
        <label for="exampleFormControlFile1">Submeter Imagem</label>
        <div class="form-group custom-file">
          <input type="file" class="custom-file-input" id="validatedCustomFile" required>
          <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
          <div class="invalid-feedback">Ficheiro Inválido</div>
        </div>
      </div>

      <div class="form-group">
        <label for="exampleFormControlFile1">Submeter Imagem</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
      </div>

      <button type="submit" class="btn btn-success display-4">Atualizar</button>
    </form>
  </div>
</div>
@endsection