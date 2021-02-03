@extends ('layouts.backend.admin')
@section('title', 'Vinhos')

@section('content')
<div class="content-wrapper">
  <div class="content">
    <form action="{{ route('vinhos.store') }}" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
      @if (session('status'))
      <div class="alert alert-success">
        <strong>{{ session('status') }}</strong>
      </div>
      @endif

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Nome do vinho</label>
        <input type="text" class="form-control" name="nome" value="{{ old('nome') }}">
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">Categoria</label>
        <select class="form-control" id="exampleFormControlSelect1" name="id_categoria">
            <option value="">Selecione uma Categoria</option>
            @foreach ($categorias as $categorias)
            <option value="{{$categorias->id}}"> {{$categorias->nome}}</option>
            @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Produtor</label>  
        <select class="form-control" id="exampleFormControlSelect1" name="id_produtor">
          <option value="">Selecione um Produtor</option>
          @foreach($users as $key_user => $user)
					  @if($user->tipouser == 'Produtor')
              <option style="background-image:url('\storage\vinhos\1.jpg')" value="{{$user->id}}">{{$user->name}} {{$user->apelido}}</option>
					  @endif
				  @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea class="ckeditor form-control" id="exampleFormControlTextarea1" rows="6" name="descricao">{{ old('descricao') }}</textarea>
      </div>

      <div class="form-row">
      
        <div class="col-md-4 mb-3">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Preço</label>
          <input type="number" class="form-control" name="preco" value="{{number_format((float)old('preco'), 2, '.', '')}}">
        </div>
        </div>

        <div class="col-md-4 mb-2">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">País</label>
          <input type="text" class="form-control" name="pais" value="{{ old('pais') }}">
        </div>
        </div>
        
        <div class="col-md-4 mb-2">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Região</label>
          <input type="text" class="form-control" name="regiao" value="{{ old('regiao') }}">
        </div>
        </div>

        <div class="col-md-4 mb-3">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Quantidade Cilindrica</label>
          <input type="number" class="form-control" name="qnt_cl" value="{{ old('qnt_cl') }}">
        </div>
        </div>

        <div class="col-md-4 mb-3">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Percentagem Álcool</label>
          <input type="number" class="form-control" name="perct_alco" value="{{ old('perct_alco') }}">
        </div>
        </div>
        
        <div class="col-md-4 mb-3">
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Stock [DELETE ME I AM USELESS]</label>
          <input type="number" class="form-control" name="stock" value="{{ old('stock') }}">
        </div>
        </div>

      </div>
      

      <div class="form-group">
        <label for="exampleFormControlFile1">Submeter Imagem</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
      </div>

      <button type="submit" class="btn btn-success display-4">Criar Registo</button>
    </form>
  </div>
</div>
@endsection
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });

</script>