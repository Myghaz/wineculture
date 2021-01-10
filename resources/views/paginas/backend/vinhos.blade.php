@extends ('layouts.backend.admin')
@section('title', 'Blog')

@section('content')	
<div class="row">
      
      <div class="col-12">
        <!-- Recent Order Table -->
        <div class="card card-table-border-none" id="recent-orders">
          <div class="card-header justify-content-between">
            <h2>Tabela de Vinhos</h2>
          </div>
          <div class="card-body pt-0 pb-5">
            <table id="tabelausers" class="ui celled table" style="width:100%">
              <thead>
                <tr>
                  <th>ID</th>
                  <th class="d-none d-lg-table-cell">Titulo</th>
                  <th class="d-none d-lg-table-cell">Autor</th>
                  <th class="d-none d-lg-table-cell">Data</th>
                  <th class="d-none d-lg-table-cell">Ver</th>
                  <th class="d-none d-lg-table-cell">Editar</th>
                  <th class="d-none d-lg-table-cell">Apagar</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  
                  <td>1</td>
                  <td>
                    <a class="text-dark" href="">a</a>
                  </td>
                  
                  <td class="d-none d-lg-table-cell">as</td>
                  
                  <td class="d-none d-lg-table-cell">a</td>
                  <td class="d-none d-lg-table-cell"><a href="#" class="btn btn-primary">Ver</a></td>
                  <td class="d-none d-lg-table-cell"><a href="#" class="btn btn-primary">Editar</a</td>  <td class="d-none d-lg-table-cell">
                      <input class="btn btn-danger" type="submit" value="Delete" />
                  </td>

                </tr>
                
              </tbody>
            </table>
            <div class="paginator">
              a
            </div>
          </div>
        </div>
      </div>
      
      
      
    </div>
@endsection