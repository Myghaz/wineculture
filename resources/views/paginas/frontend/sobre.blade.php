@extends("paginas.frontend.layout")

@section('title', 'Sobre')

@section("content")
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="assets\img\paginas\frontend\sobre/banner_sobra.png" alt="First slide">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-7 m-3 mt-5" ,style="width=1000px" data-aos="fade-up">
            <div class="text-left">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/jRVUhtd_O1M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <!--<div class="video-box about">
                            <img src="/assets/img/paginas/frontend/sobre/about.jpg" class="img-fluid" alt="">
                            <a href="" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                        </div>-->
            </div>
        </div>
        <div class="col-md-3 m-3 mt-5" data-aos="fade-up" data-aos-delay="150">
            <h2><b>A Nossa Instituição</b></h1>
                <br><br>
                <p style="color: grey;font-size: 13px">A WineCulture é uma instituição sem fins lucrativos, com o objetivo de promover a vinicultura nacional.<br><br>
                    Com o nosso website nós listamos todos os nossos vinhos, com toda a sua informação e com o seu acompanhamento perfeito.<br><br>
                    A nossa instituição é excelente para os produtores de vinho de Portugal, se for um produtor Português pode contactar-nos para publicar os seus vinhos, promovendo assim a vinicultura nacional.<br><br>
                    Temos também uma parte comercial onde vendemos mercadoria como acessórios pessoais, de escritório, vestuário e produtos para se proteger durante a pandemia.<br><br>
                    Conte conosco para descobrir a vinicultura nacional!</p>
        </div>
    </div>
</div>
@endsection
@section("javascript")
<script src="{{ URL::asset('assets/css/paginas/frontend/vendor/aos/aos.js') }}"></script>
<script src="{{ URL::asset('assets/js/paginas/frontend/sobre.js') }}"></script>
@endsection

