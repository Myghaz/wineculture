@extends ('layouts.backend.admin')
@section('title', 'Receita')

@section('content')
<div class="content-wrapper">
  <div class="content">
    @foreach($receitas as $key => $receita)
    <h2>Ver ID {{$receita->id}}</h2>
    <br>
    <form action="{{route('showReceita', $receita)}}" method="POST">
      {{csrf_field()}}
      @if (session('status'))
      <div class=”alert alert-success”>
        <strong>{{ session('status') }}</strong>
      </div>
      @endif
      <div class="form-group">
        <label for="formGroupExampleInput">Nome da Receita</label>
        <input type="text" readonly class="form-control" name="nome" id="formGroupExampleInput" placeholder="Nome da Receita" value="{{$receita->nome}}">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Utilizador</label>
        @foreach($Users as $user)
        @if ($user->id == $receita->id_user)
        <input type="text" readonly class="form-control" name="user" id="formGroupExampleInput" placeholder="Utilizador" value="{{$user->name}} {{$user->apelido}}">
        @endif
        @endforeach
      </div>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Data de Criação</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" name="data" id="staticEmail" value="{{$receita->created_at}}">
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Categoria</label>
        @foreach($category_wines as $category_wine)
        @if ($category_wine->id == $receita->id_categoria)
        <input class="form-control" readonly id="exampleFormControlTextarea1" rows="3" name="categoria" value="{{$category_wine->nome}}"></input>
        @endif
        @endforeach
@endforeach
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea class="form-control" readonly id="exampleFormControlTextarea1" rows="3" name="descricao">{{$receita->descricao}}</textarea>
      </div>

    </form>




  </div>


  @endsection
