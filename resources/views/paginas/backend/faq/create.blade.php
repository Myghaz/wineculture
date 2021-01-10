@extends ('layouts.backend.admin')
@section('title', 'FAQ')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <h2>Inserir Pergunta</h2>
            <br>
            <form action="{{route('faq.store')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                @if (session('status'))
                <div class="alert alert-success">
                    <strong>{{ session('status') }}</strong>
                </div>
                @endif
                <div class="form-group">
                    <label for="formGroupExampleInput">Pergunta</label>
                    <input type="text" class="form-control" name="pergunta" id="formGroupExampleInput">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Categoria</label>
                    <input class="form-control" id="exampleFormControlSelect1" name="categoria">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Resposta</label>
                    <textarea class="ckeditor form-control" id="exampleFormControlTextarea1" rows="3"
                        name="resposta"></textarea>
                </div>
                <button type="submit" name="button" class="btn btn-success display-4">Submeter</button>
            </form>
        </div>
    </div>


@endsection
