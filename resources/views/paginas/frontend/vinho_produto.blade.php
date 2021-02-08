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
    <h1 class="pro-d-title mb-0">
      {{$vinho_det->nome}}
    </h1>
    <div class="rate float-left">
      <input type="radio" id="star5" name="rate" value="5" />
      <label for="star5" title="text">5 stars</label>
      <input type="radio" id="star4" name="rate" value="4" />
      <label for="star4" title="text">4 stars</label>
      <input type="radio" id="star3" name="rate" value="3" />
      <label for="star3" title="text">3 stars</label>
      <input type="radio" id="star2" name="rate" value="2" />
      <label for="star2" title="text">2 stars</label>
      <input type="radio" id="star1" name="rate" value="1" />
      <label for="star1" title="text">1 star</label>
    </div><br>
    <hr class="my-4">
    <p class="mt-4">
      {{$vinho_det->descricao}}
    </p>
    <hr class="my-3">
    <div class="product_meta">
      <span class="posted_in"><strong>Categoria:</strong> <a rel="tag" href="#">
          {{$vinho_cat->nome}}
        </a></span>
      <span class="tagged_as"><strong>Região:</strong> <a rel="tag" href="#">
          {{$vinho_det->regiao}}
        </a></span>
      <span class="tagged_as"><strong>Produtor:</strong>
      <img class="img-fluid rounded-circle mb-2" style="width:32px; height:32px" src="/assets/img/users/{{$vinho_produtor->img}}">
      <a rel="tag" href="{{ route('perfil_publico') }}">
          {{$vinho_produtor->name}} 
          {{$vinho_produtor->apelido}}
        </a></span>
    </div>
    <hr class="my-1">
    <div class="product_meta">
      <span class="posted_in"><strong>Percentagem Álcool: </strong>{{$vinho_det->perct_alco}}%</span>
      <span class="posted_in"><strong>Quantidade CL: </strong>{{$vinho_det->qnt_cl}}CL</span>
    </div>
  </div>
</div>


@endsection

@section("javascript")
<script src="{{ URL::asset('assets/js/paginas/frontend/vinho_produto.js') }}"></script>
@endsection