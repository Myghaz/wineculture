@extends ('layouts.backend.admin')
@section('title', 'FAQ')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <h2>Inserir Pergunta</h2>
            <br>
            <form action="{{ route('faq.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @if (session('status'))
                    <div class="alert alert-success">
                        <strong>{{ session('status') }}</strong>
                    </div>
                @endif
                <div class="form-group">
                    <label for="formGroupExampleInput">Pergunta</label>
                    <input type="text" class="form-control" name="pergunta" value="{{ old('pergunta') }}"
                        id="formGroupExampleInput">
                </div>
                <div class="form-group">
                    <label for="inputCategory">Categoria</label>
                    <select name="categoria" id="inputCategory" class="form-control">
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Resposta</label>
                    <textarea class="ckeditor form-control" value="{{ old('resposta') }}" id="exampleFormControlTextarea1"
                        rows="3" name="resposta"></textarea>
                </div>
                <button type="submit" name="button" class="btn btn-success display-4">Submeter</button>
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
