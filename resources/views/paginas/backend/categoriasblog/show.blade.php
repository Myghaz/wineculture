@extends ('layouts.backend.admin')
@section('title', 'Categorias Blog')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <h2>Categoria</h2>
            <br>
            @if (session('status'))
                <div class="alert alert-success">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
            <div class="form-group">
                <label for="formGroupExampleInput">Categoria</label>
                <input readonly class="form-control" type="text" class="form-control" name="nome"
                    id="formGroupExampleInput" value="{{  $categoria->nome}}">
            </div>
            <a href="{{ route('categoriasblog.edit', $categoria) }}" class="btn btn-xs btn-warning btn-p">Editar Categoria</a>
        </div>
    </div>
@endsection
