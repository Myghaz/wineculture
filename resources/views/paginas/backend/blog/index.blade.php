@extends ('layouts.backend.admin')
@section('title', 'Blog')

@section('content')
<div class="content-wrapper">
  <div class="content">
    <!-- Top Statistics -->


    <div class="row">
      @if (count($blogs))
      <div class="col-12">
        <!-- Recent Order Table -->
        <div class="card card-table-border-none" id="recent-orders">
          <div class="card-header justify-content-between">
            <h2>Tabela de Posts</h2>
          </div>
          <div class="card-body pt-0 pb-5">
            <table id="tabelablog" class="ui celled table" style="width:100%">
              <thead>
                <tr>
                  <th class="d-none d-lg-table-cell">Imagem</th>
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
                  @foreach($blogs as $blog)
                  <td>
                    <img src="{{asset('storage/blog/'.$blog->img) }}" style="width:65px; height:65px; object-fit: cover;  object-position: 0% 90%;" class="rounded-circle w-45" alt="{{$blog->nome}}">
                  </td>
                  <td>
                    <a class="text-dark" href="">{{$blog->titulo}}</a>
                  </td>
                  <td class="d-none d-lg-table-cell">{{$blog->user->name}} {{$blog->user->apelido}}</td>
                  <td class="d-none d-lg-table-cell">{{$blog->data}}</td>
                  <td class="d-none d-lg-table-cell"><a href="{{ route('blog.show', $blog) }}" class="btn btn-primary">Ver</a></td>
                  <td class="d-none d-lg-table-cell"><a href="{{ route('blog.edit', $blog) }}" class="btn btn-primary">Editar</a</td> @csrf @method("DELETE") <td class="d-none d-lg-table-cell">
                      <form action="{{ route('blog.destroy', $blog) }}" method="post">
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
        </div>
      </div>
      @else
      <h6>Sem Posts Registrados</h6>
      @endif
    </div>

  </div>
  <script src="{{ asset('assets\js\paginas\backend\blog.js') }}"></script>
  @endsection
