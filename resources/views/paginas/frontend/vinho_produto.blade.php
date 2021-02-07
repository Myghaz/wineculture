@extends("paginas.frontend.layout")

@section('title', $vinho_det->nome)

@section("links")
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/vinho_produto.css') }}">
@endsection

@section("content")

<div class="container conte">

  <div class="row">

  <div class="col-md-4 text-center">
      
  <div class="container_img">

<!-- Gallery -->
<div id="js-gallery" class="gallery">

  <!--Gallery Hero-->
  <div class="gallery__hero">
    <img src="\storage\vinhos\{{$vinho_det->img}}" class="img-fluid" alt="vinho">
  </div>
  <!--Gallery Hero-->

  <!--Gallery Thumbs-->
  <div class="gallery__thumbs">
      
      @foreach($vinhos_foto as $key => $foto)
      <!--<a href="\storage\vinhos\{{$vinho_det->img}}" data-gallery="thumb" class="is-active">
        <img src="\storage\vinhos\{{$vinho_det->img}}">
      </a>-->
      <a href="\storage\vinhos\{{$foto->img}}" data-gallery="thumb">
        <img class="vinhomini_img" src="\storage\vinhos\{{$foto->img}}">
      </a>
      @endforeach
      
  </div>
  <!--Gallery Thumbs-->

</div><!--.gallery-->
<!-- Gallery -->

</div><!--.container-->

</div>
  <div class="col-md-8 mb-5">
    <h1 class="pro-d-title mb-4">
      {{$vinho_det->nome}}
    </h1>
    <p>
      {{$vinho_det->descricao}}
    </p>
    <div class="product_meta">
      <span class="posted_in"><strong>Categoria:</strong> <a rel="tag" href="#">
          {{$vinho_cat->nome}}
        </a></span>
      <span class="tagged_as"><strong>Região:</strong> <a rel="tag" href="#">
          {{$vinho_det->regiao}}
        </a></span>
      <span class="tagged_as"><strong>Produtor:</strong> <a rel="tag" href="#">
          {{$vinho_produtor->name}} 
          {{$vinho_produtor->apelido}}
        </a></span>
    </div>
    <div class="product_meta2">
      <span class="posted_in"><strong>Percentagem Álcool: </strong>{{$vinho_det->perct_alco}}%</span>
      <span class="posted_in"><strong>Quantidade CL: </strong>{{$vinho_det->qnt_cl}}CL</span>
    </div>
  </div>
</div>


@endsection

@section("javascript")
<script src="{{ URL::asset('assets/js/paginas/frontend/vinho_produto.js') }}"></script>
@endsection