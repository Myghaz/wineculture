@extends ('layouts.backend.admin')
@section('title', 'Vinho')

@section('content')
<div class="content-wrapper">
  <div class="content">
    <form action="{{route('vinhos.update', $vinho->id)}}" method="POST">
      {{csrf_field()}}
      @method('PUT')
      @if (session('status'))
      <div class=”alert alert-success”>
        <strong>{{ session('status') }}</strong>
      </div>
      @endif
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Nome do vinho</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="nome">{{$vinho->nome}}</textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">Categoria</label>
        <select class="form-control" id="exampleFormControlSelect1"  name="id_categoria">
            <option value="">Selecione uma Categoria</option>
            @foreach ($category_wines as $category_wine)
            <option @if ($vinho->id_categoria==$category_wine->id) selected @endif value="{{$category_wine->id}}"> {{$category_wine->nome}}</option>
            @endforeach
        </select>
    </div>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Data</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" name="data" id="staticEmail" value="{{now()}}">
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao">{{$vinho->descricao}}</textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlFile1">Submeter Imagem</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
      </div>
      <button type="submit" class="btn btn-success display-4">Submeter</button>
    </form>
  </div>
</div>


@endsection
