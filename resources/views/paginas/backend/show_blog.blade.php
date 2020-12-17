@extends ('layouts.backend.admin')
@section('title', 'Blog')

@section('content')
<div class="content-wrapper">
    <div class="content">
        <h2>Inserir novo post</h2>
        <br>
<form action="{{route('blog.update', $blog)}}" method="POST">
    {{csrf_field()}}
@if (session('status'))
<div class=”alert alert-success”>
<strong>{{ session('status') }}</strong>
</div>
@endif
    <div class="form-group">
        <label for="formGroupExampleInput">Nome do Post</label>
        <input type="text" class="form-control" name="titulo" id="formGroupExampleInput" placeholder="Nome do Post" value="{{$previewblog->titulo}}">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Autor</label>
        <input type="text" class="form-control" name="autor" id="formGroupExampleInput" placeholder="Autor"value="{{$previewblog->autor}}" >
      </div>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Data</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" name="data" id="staticEmail" value="{{$previewblog->data}}" >
        </div>
      </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Categoria</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="categoria" value="{{$value->categoria}}"></textarea>
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Introdução</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="preview" value="{{$previewblog->preview}}"></textarea>
    </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Corpo da Post</label>
        <textarea class="ckeditor form-control" id="exampleFormControlTextarea1" rows="3"  name="descricao" value="{{$previewblog->descricao}}"></textarea>
      </div>

    <div class="form-group">
        <label for="exampleFormControlFile1">Submeter Imagem</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1"  name="img">
      </div>
      <button type=”submit” name=”button” class=”btn btn-success display-4">Submeter</button>
  </form>
    </div>
</div>


@endsection
