@extends ('layouts.backend.admin')
@section('title', 'FAQ')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <!-- Top Statistics -->
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="card card-mini mb-4">
                        <div class="card-body cartao">
                            <h2 class="mb-1">{{ $totalperguntas }}</h2>
                            <p>Total de Perguntas</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card card-mini mb-4">
                        <div class="card-body cartao">
                            <h2 class="mb-1">{{ $totalcategorias }}</h2>
                            <p>Categorias</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Recent Order Table -->
                    <div class="card card-table-border-none" id="users">
                        <div class="card-header justify-content-between">
                            <h2>Perguntas Frequentes</h2>
                        </div>
                        <div class="card-body pt-0 pb-5">
                            <table id="tablefaq" class="ui celled table tamanho">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th class="d-none d-lg-table-cell">Pergunta</th>
                                        <th class="d-none d-lg-table-cell">Resposta</th>
                                        <th class="w-2">Categoria</th>
                                        <th class="acoes">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($perguntas as $pergunta)
                                        <tr>

                                            <td>{{ $pergunta->id }}</td>
                                            <td>
                                                <a class="text-dark" href="">{{ $pergunta->pergunta }}</a>
                                            </td>
                                            <td>
                                                <a class="text-dark" href="">{!! $pergunta->resposta !!}</a>
                                            </td>
                                            <td class="d-none d-lg-table-cell">{{ $pergunta->categoria }}</td>
                                            <td class="acoes">
                                                <a href="{{ route('faq.show', ['pergunta' => $pergunta]) }}"
                                                    class="btn btn-xs btn-primary btn-p"><i
                                                        class="fas fa-eye fa-xs"></i></a>
                                                <a href="{{ route('faq.edit', $pergunta) }}"
                                                    class="btn btn-xs btn-warning btn-p"><i
                                                        class="fas fa-pen fa-xs"></i></a>
                                                <form action="{{ route('faq.destroy', $pergunta) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-xs btn-danger btn-p"><i
                                                            class="fas fa-trash fa-xs"></i></button>
                                                </form>
                                            </td>
                                        </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('assets\js\paginas\backend\faq.js') }}"></script>
    @endsection
