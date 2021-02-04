@extends ('layouts.backend.admin')
@section('title', 'Receitas')

@section('content')
<div class="content-wrapper">
    <div class="content">
        <a class="backurl" href="{{ url()->previous() }}">
            <i class="fas fa-arrow-left"></i>
            <span>Voltar</span>
        </a>
        <h2>Inserir nova receita</h2>
        <br>
        <form action="{{route('receitas.store')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            @if (session('status'))
            <div class=”alert alert-success”>
                <strong>{{ session('status') }}</strong>
            </div>
            @endif
            <div class="form-group">
                <label for="formGroupExampleInput">Nome da Receita</label>
                <input type="text" class="form-control" name="nome" id="formGroupExampleInput" placeholder="Nome da Receita" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Categoria</label>
                <select class="form-control" id="exampleFormControlSelect1"  name="id_categoria">
                    <option value="">Selecione uma Categoria</option>
                    @foreach ($categories_wines as $category_wine)
                    <option value="{{$category_wine->id}}" >{{$category_wine->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Data</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" name="data" id="staticEmail" value="{{now()}}" >
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="descricao"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Receita</label>
                <textarea class="ckeditor form-control" id="exampleFormControlTextarea1" rows="3"  name="preparo"></textarea>
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
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });

</script>

