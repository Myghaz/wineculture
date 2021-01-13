@extends("paginas.frontend.layout")
@section('title', ' {{$vinho_det->nome}}')

@section("content")

<div class="container mt-5 mb-5">
  <div class="pro-img-details">
    <img src="\storage\vinhos\{{$vinho_det->img}}" style="background-size: cover; width: 300px; height:300px" alt="{{$vinho_det->nome}}">
  </div>

  <div class="mt-2">
    <h1 class="pro-d-title mb-4">
      {{$vinho_det->nome}}
    </h1>
    <p>
      {{$vinho_det->descricao}}
    </p>
    <div class="product_meta">
      <span class="posted_in"><strong>Categoria:</strong> <a rel="tag" href="#">
          {{$vinho_det->id_categoria}}
        </a></span>
      <span class="tagged_as"><strong>Região:</strong> <a rel="tag" href="#">
          {{$vinho_det->regiao}}
        </a></span>
      <span class="tagged_as"><strong>Produtor:</strong> <a rel="tag" href="#">
          {{$vinho_det->id_produtor}}
        </a></span>
    </div>
    <div class="product_meta2">
      <span class="posted_in"><strong>Percentagem Álcool: </strong>23%</span>
      <span class="posted_in"><strong>Quantidade CL: </strong>75CL</span>
    </div>
    <div class="m-bot15">
      <strong>Preço :</strong>
      <span class="pro-price"> {{$vinho_det->preco}}
        €</span>
    </div>
    <span class="posted_in"><strong>Stock : </strong>
      {{$vinho_det->stock}}</span>
  </div>
</div>
@endsection