@extends ('layouts.backend.admin')
@section('title', 'FAQ')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <h2>Inserir Pergunta</h2>
            <br>
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput">Pergunta</label>
                    <input type="text" class="form-control" name="titulo" id="formGroupExampleInput">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Categoria</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="categoria">
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Resposta</label>
                    <textarea class="ckeditor form-control" id="exampleFormControlTextarea1" rows="3"
                        name="descricao"></textarea>
                </div>
                <button type="submit" name="button" class="btn btn-success display-4">Submeter</button>
            </form>
        </div>
    </div>


@endsection
