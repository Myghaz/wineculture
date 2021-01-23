@extends ('layouts.backend.admin')
@section('title', 'Categorias Blog')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <h2>Editar Categoria</h2>
            <br>
            <form action="{{ route('categoriasblog.update', $categories) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if (session('status'))
                    <div class="alert alert-success">
                        <strong>{{ session('status') }}</strong>
                    </div>
                @endif
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Categoria</label>
                    <input class="form-control" id="exampleFormControlSelect1" name="name"
                        value="{{('name') }}">
                </div>
                <button type="submit" name="button" class="btn btn-success display-4">Submeter</button>
            </form>
        </div>
    </div>
@endsection
