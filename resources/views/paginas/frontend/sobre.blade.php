@extends("paginas.frontend.layout")

@section('title', 'Sobre')

@section("links")
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/sobre.css') }}">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" >
@endsection

@section("content")

<img class="sobre_banner" src="assets\img\paginas\frontend\sobre\banner_sobra.png" alt="banner">

<div class="container">

  <div class="mt-5 ml-3 mr-3 pb-4 pl-3 pr-3" data-aos="fade-up" data-aos-delay="150">
    <div class="row">

      <div class="col-md-5 mt-5" >
        <h2 class="sobre_color mb-5"><b>WineCulture</b></h2>
        <p>
          A WineCulture é uma instituição sem fins lucrativos, com o objetivo de promover a vinicultura nacional.<br><br>
          Com o nosso website nós listamos todos os nossos vinhos, com toda a sua informação e com o seu acompanhamento perfeito.<br><br>

          A nossa instituição é excelente para os produtores de vinho de Portugal, se for um produtor Português pode contactar-nos para publicar os seus vinhos, promovendo assim a vinicultura nacional.<br><br>
          Temos também uma parte comercial onde vendemos mercadoria como acessórios pessoais, de escritório, vestuário e produtos para se proteger durante a pandemia.<br><br>
          Conte conosco para descobrir a vinicultura nacional!
        </p>
      </div>
      
      <div class="col mt-5"></div>
      <div class="col mt-5 sobre_divider"></div>

      <div class="col-md-5 mt-5">
        <h2 class="sobre_color mb-5"><b>Missão</b></h2>
        <p>
          A WineCulture é uma instituição sem fins lucrativos, com o objetivo de promover a vinicultura nacional.<br><br>
          Com o nosso website nós listamos todos os nossos vinhos, com toda a sua informação e com o seu acompanhamento perfeito.<br><br>

          A nossa instituição é excelente para os produtores de vinho de Portugal, se for um produtor Português pode contactar-nos para publicar os seus vinhos, promovendo assim a vinicultura nacional.<br><br>
          Temos também uma parte comercial onde vendemos mercadoria como acessórios pessoais, de escritório, vestuário e produtos para se proteger durante a pandemia.<br><br>
          Conte conosco para descobrir a vinicultura nacional!
        </p>
      </div>
    </div>
  </div>
  
  <div class="p-3 m-3 mb-5 mt-5 text-center" data-aos="fade-up" data-aos-delay="50">
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/35Q00Tz6NnQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>

  <div class="mt-5 ml-3 mr-3 pb-4 pl-3 pr-3" data-aos="fade-up" data-aos-delay="50">
    <h2 class="sobre_color"><b>Nossa Equipa</b></h2>
  </div>

  <section>
  
    <div class="cont s--inactive mb-5" data-aos="fade-up" data-aos-delay="150">
  <!-- cont inner start -->
  <div class="cont__inner">
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">Sérgio Silvestre</h2>
          </div>
          <div class="el__content">
            <div class="el__text">Full-Stack Developer</div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">Guilherme Meireles</h2>
          </div>
          <div class="el__content">
            <div class="el__text">Front-End Developer</div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">José Parreira</h2>
          </div>
          <div class="el__content">
            <div class="el__text">Full-Stack Developer</div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">Miguel Pereira</h2>
          </div>
          <div class="el__content">
            <div class="el__text">Back-end Developer</div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">Pedro Monteiro</h2>
          </div>
          <div class="el__content">
            <div class="el__text">Designer</div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- el end -->
  </div>
  <!-- cont inner end -->
</div>

    </section>
</div>

<!-- ======= Our Team Section ======= -->
<!--<section id="team" class="team">
        <div class="teamcontainer">

            <div class="section-title">
                <h2>Nossa Equipa</h2>
                <p>Somos uma equipa de 5 jovens muito empenhados a trabalhar neste projeto. Venha nos conhecer.</p>
            </div>

            <div class="row">

                <div data-aos="fade-up">
                    <div class="member">
                        <div class="pic"><img src="/assets/img/paginas/frontend/index/team/team-1.jpg" width="300" height="300" alt=""></div>
                        <div class="member-info">
                            <h4>Sérgio Silvestre</h4>
                            <span>Full-Stack Developer</span>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="pic "><img src="/assets/img/paginas/frontend/index/team/team-2.jpg " width="300" height="300" alt=" "></div>
                        <div class="member-info ">
                            <h4>Guilherme Meireles</h4>
                            <span>Front-end Developer</span>
                            <div class="social ">
                                <a href=" "><i class="icofont-twitter "></i></a>
                                <a href=" "><i class="icofont-facebook "></i></a>
                                <a href=" "><i class="icofont-instagram "></i></a>
                                <a href=" "><i class="icofont-linkedin "></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="pic ">
                            <img src="/assets/img/paginas/frontend/index/team/team-3.jpg " width="300" height="300" alt=" ">
                        </div>
                        <div class="member-info ">
                            <h4>José Parreira</h4>
                            <span>Full-Stack Developer</span>
                            <div class="social ">
                                <a href=" "><i class="icofont-twitter "></i></a>
                                <a href=" "><i class="icofont-facebook "></i></a>
                                <a href=" "><i class="icofont-instagram "></i></a>
                                <a href=" "><i class="icofont-linkedin "></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="pic "><img src="/assets/img/paginas/frontend/index/team/team-4.jpg " width="300" height="300" alt=" "></div>
                        <div class="member-info ">
                            <h4>Miguel Pereira</h4>
                            <span>Back-end Developer</span>
                            <div class="social ">
                                <a href=" "><i class="icofont-twitter "></i></a>
                                <a href=" "><i class="icofont-facebook "></i></a>
                                <a href=" "><i class="icofont-instagram "></i></a>
                                <a href=" "><i class="icofont-linkedin "></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div class="pic "><img src="/assets/img/paginas/frontend/index/team/team-5.jpg " width="300" height="300" alt=" "></div>
                        <div class="member-info ">
                            <h4>Pedro Monteiro</h4>
                            <span>Designer</span>
                            <div class="social ">
                                <a href=" "><i class="icofont-twitter "></i></a>
                                <a href=" "><i class="icofont-facebook "></i></a>
                                <a href=" "><i class="icofont-instagram "></i></a>
                                <a href=" "><i class="icofont-linkedin "></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>-->
    
    

@endsection
@section("javascript")
<script src="{{ URL::asset('assets/css/paginas/frontend/vendor/aos/aos.js') }}"></script>
<script src="{{ URL::asset('assets/js/paginas/frontend/sobre.js') }}"></script>
@endsection