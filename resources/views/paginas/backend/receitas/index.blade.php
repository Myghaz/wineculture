@extends ('layouts.backend.admin')
@section('title', 'Dashboard')
@section('content')
<div class="row">
    <div class="col-12">
        <!-- Recent Order Table -->
        <div class="card card-table-border-none" id="recent-orders">
            <div class="card-header justify-content-between">
                <h2>Tabela de Receitas</h2>
            </div>
            <div class="card-body pt-0 pb-5">
                <table id="tablereceitas" class="ui celled table" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th class="d-none d-lg-table-cell">Nome</th>
                            <th class="d-none d-lg-table-cell">Categoria</th>
                            <th class="d-none d-lg-table-cell">Utilizador</th>
                            <th class="d-none d-lg-table-cell">Descrição</th>
                            <th class="d-none d-lg-table-cell">Foto</th>
                            <th class="d-none d-lg-table-cell">Ver</th>
                            <th class="d-none d-lg-table-cell">Editar</th>
                            <th class="d-none d-lg-table-cell">Apagar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($receitas as $receita)
                        <tr>
                            <td>{{$receita->id}}</td>
                            <td>
                                <a class="text-dark" href="">{{$receita->nome}}</a>
                            </td>
                            @foreach($category_wines as $category_wine)
                            @if ($receita->id_categoria == $category_wine->id)
                            <td class="d-none d-lg-table-cell">{{$category_wine->nome}}</td>
                            @endif
                            @endforeach
                            @foreach($Users as $User)
                            @if ($receita->id_user == $User->id)
                            <td class="d-none d-lg-table-cell">{{$User->name}} {{$User->apelido}}</td>
                            @endif
                            @endforeach
                            <td>
                                <a class="text-dark" href="">{{$receita->descricao}}</a>
                            </td>

                            <td class="d-none d-lg-table-cell"><img src="{{ asset('storage/'.$receita->foto) }}" height="50px"></td>

                            <td class="d-none d-lg-table-cell"><a href="{{ route('receitas.show', $receita) }}" class="btn btn-primary">Ver</a></td>
                            <td class="d-none d-lg-table-cell"><a href="{{-- route('edit.receita', $receita) --}}" class="btn btn-primary">Editar</a</td> @csrf @method("DELETE") <td class="d-none d-lg-table-cell">
                                <form action="{{-- route('destroy.receita', $receita) --}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input class="btn btn-danger" type="submit" value="Delete" />
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <script src="{{ asset('assets\js\paginas\backend\receitas.js') }}"></script>
            @endsection