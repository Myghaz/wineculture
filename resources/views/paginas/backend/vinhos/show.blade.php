@extends ('layouts.backend.admin')
@section('title', 'Vinhos')

@section('content')
<div class="content-wrapper">
  <div class="content">
    <br>
      @if (session('status'))
      <div class=”alert alert-success”>
        <strong>{{ session('status') }}</strong>
      </div>
      @endif

      <div class="form-group">
        <label for="formGroupExampleInput">Nome do vinho</label>
        <input type="text" readonly class="form-control" name="nome" id="formGroupExampleInput" placeholder="Nome da Receita" value="{{$receita->nome}}">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Utilizador</label>
        <input type="text" readonly class="form-control" name="user" id="formGroupExampleInput" placeholder="Utilizador" value="{{$receita->user->name}} {{$receita->user->apelido}}">
      </div>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Data de Criação</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" name="data" id="staticEmail" value="{{$receita->created_at}}">
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Categoria</label>
        <input type="text" readonly class="form-control" name="categoria" id="formGroupExampleInput" placeholder="Utilizador" value="{{$receita->categoria->nome}}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea class="form-control" readonly id="exampleFormControlTextarea1" rows="3" name="descricao">{{$receita->descricao}}</textarea>
      </div>
  </div>
</div>

  @endsection