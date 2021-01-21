@extends ('layouts.backend.admin')
@section('title', 'Contactos')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <h2>Pergunta</h2>
            <br>
            @if (session('status'))
                <div class="alert alert-success">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
            <div class="form-group">
                <label for="formGroupExampleInput">Pergunta</label>
                <input readonly class="form-control" type="text" class="form-control" name="pergunta"
                    id="formGroupExampleInput" value="{{ $mensagem->name }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Assunto</label>
                <input readonly class="form-control" class="form-control" id="exampleFormControlSelect1" name="categoria"
                    value="{{ $mensagem->assunto }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensagem</label>
                <textarea readonly class="form-control" style="height:140px" id="exampleFormControlTextarea1" rows="3"
                    value="" name="resposta">{{ $mensagem->mensagem }}</textarea>
            </div>
            <a href="" class="btn btn-xs btn-warning btn-p">Responder a Mensagem</a>
        </div>
    </div>
@endsection
