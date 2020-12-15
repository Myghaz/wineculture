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
                      <th class="d-none d-lg-table-cell">Descrição</th>
                      <th class="d-none d-lg-table-cell">Tipo de Vinhos</th>
                      <th class="d-none d-lg-table-cell">Foto</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    @foreach($receitas as $key => $receita)
                      <td>{{$receita->id}}</td>
                      <td>
                        <a class="text-dark" href="">{{$receita->nome}}</a>
                      </td>
                      <td>
                        <a class="text-dark" href="">{{$receita->descricao}}</a>
                      </td>
                      <td class="d-none d-lg-table-cell">{{$receita->tipovinho}}</td>
                      <td class="d-none d-lg-table-cell">{{$receita->foto}}</td>
                    </tr>
              </tr>
                    @endforeach
                  </tbody>
                </table>
    </div>
@endsection
