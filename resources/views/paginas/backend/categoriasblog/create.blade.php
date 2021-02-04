@extends ('layouts.backend.admin')
@section('title', 'Categorias Blog')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <a class="backurl" href="{{ url()->previous() }}">
                <i class="fas fa-arrow-left"></i>
                <span>Voltar</span>
            </a>
            <h2>Inserir Categoria</h2>
            <br>
            <form action="{{ route('categoriasblog.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @if (session('status'))
                    <div class="alert alert-success">
                        <strong>{{ session('status') }}</strong>
                    </div>
                @endif
                <div class="form-group">
                    <label for="formGroupExampleInput">Categoria</label>
                    <input type="text" class="form-control" name="name" id="formGroupExampleInput">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Submeter Imagem</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1"  name="img">
                  </div>
                <button type="submit" name="button" class="btn btn-success display-4">Submeter</button>
            </form>
        </div>
    </div>
@endsection
