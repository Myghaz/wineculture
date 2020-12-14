@extends ('layouts.backend.admin')
@section('title', 'Blog')

@section('content')
<div class="content-wrapper">
    <div class="content">
        <h2>Inserir novo post</h2>
        <br>
<form>
    <div class="form-group">
        <label for="formGroupExampleInput">Nome do Post</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome do Post">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Autor</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Autor">
      </div>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Data</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="TodayDate">
        </div>
      </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Categoria</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>Valor Dinamico</option>
      </select>
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Introdução</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Parágrafo 1</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Parágrafo 2</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Parágrafo 3</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Parágrafo 4</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Parágrafo 5</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Parágrafo 6</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Parágrafo 7</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Parágrafo 8</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Parágrafo 9</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Parágrafo 10</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Parágrafo 11</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

    <div class="form-group">
        <label for="exampleFormControlFile1">Submeter Imagem</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
      </div>

  </form>
    </div>
</div>

@endsection
