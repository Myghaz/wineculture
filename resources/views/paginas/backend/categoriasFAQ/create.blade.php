@extends ('layouts.backend.admin')
@section('title', 'Categorias FAQ')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <h2>Inserir Categoria</h2>
            <br>
            <form action="{{ route('categoriasFAQ.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @if (session('status'))
                    <div class="alert alert-success">
                        <strong>{{ session('status') }}</strong>
                    </div>
                @endif
                <div class="form-group">
                    <label for="formGroupExampleInput">Categoria</label>
                    <input type="text" class="form-control" name="categoria" value="{{ old('categoria') }}" id="formGroupExampleInput">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Descrição</label>
                    <input type="text" class="form-control" name="descricao"  value="{{ old('descricao') }}" id="exampleFormControlSelect1">
                </div>
                <button type="submit" name="button" class="btn btn-success display-4">Submeter</button>
            </form>
        </div>
    </div>
@endsection
