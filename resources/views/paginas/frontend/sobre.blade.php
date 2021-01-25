@extends("paginas.frontend.layout")

@section('title', 'Sobre')

@section("links")
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/sobre.css') }}">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" >
@endsection

@section("content")
<div class="sobre_banner_div">
  <img class="sobre_banner" src="assets\img\paginas\frontend\sobre/banner_sobra.png" alt="banner">
</div>
<div class="container">

  <div class="mt-5 ml-3 mr-3 pb-4 pl-3 pr-3" data-aos="fade-up" data-aos-delay="150">
    <h2><b>A Nossa Instituição</b></h2>
    <br><br>
    <p>
      A WineCulture é uma instituição sem fins lucrativos, com o objetivo de promover a vinicultura nacional.<br><br>
      Com o nosso website nós listamos todos os nossos vinhos, com toda a sua informação e com o seu acompanhamento perfeito.<br><br>

      A nossa instituição é excelente para os produtores de vinho de Portugal, se for um produtor Português pode contactar-nos para publicar os seus vinhos, promovendo assim a vinicultura nacional.<br><br>
      Temos também uma parte comercial onde vendemos mercadoria como acessórios pessoais, de escritório, vestuário e produtos para se proteger durante a pandemia.<br><br>
      Conte conosco para descobrir a vinicultura nacional!
    </p>
  </div>

  <div class="p-3 m-3 mb-5" data-aos="fade-up" data-aos-delay="50">
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/35Q00Tz6NnQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>


</div>
@endsection
@section("javascript")
<script src="{{ URL::asset('assets/css/paginas/frontend/vendor/aos/aos.js') }}"></script>
<script src="{{ URL::asset('assets/js/paginas/frontend/sobre.js') }}"></script>
@endsection