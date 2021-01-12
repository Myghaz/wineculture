@extends ('layouts.backend.admin')
@section('title', 'Vinho')

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
        <label for="formGroupExampleInput">Nome da Vinho</label>
        <input type="text" readonly class="form-control" name="nome" id="formGroupExampleInput" placeholder="Nome da Vinho" value="{{$vinho->nome}}">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Utilizador</label>
        <input type="text" readonly class="form-control" name="user" id="formGroupExampleInput" placeholder="Utilizador" value="{{$vinho->user->name}} {{$vinho->user->apelido}}">
      </div>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Data de Criação</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" name="data" id="staticEmail" value="{{$vinho->created_at}}">
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Categoria</label>
        <input type="text" readonly class="form-control" name="categoria" id="formGroupExampleInput" placeholder="Utilizador" value="{{$vinho->categoria->nome}}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea class="form-control" readonly id="exampleFormControlTextarea1" rows="3" name="descricao">{{$vinho->descricao}}</textarea>
      </div>
  </div>
</div>

  @endsection
