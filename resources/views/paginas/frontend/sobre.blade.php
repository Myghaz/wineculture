<!doctype html>
<html>

<head>
    @section('title', 'Sobre')
    @extends ('includes.frontend.head')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/sobre.css') }}">
</head>

<body>
    @include('includes.frontend.navbar')
    @yield('content')
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
        </svg>
    </button>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/assets/img/paginas/frontend/sobre/banner_sobre.png" alt="First slide">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-7 m-3 mt-5" ,style="width=1000px" data-aos="fade-up">
                <div class="text-left">
                    <h2 style="width:60%"><b>Lorem ipsum dolor sit amet</b></h1>
                        <br><br>
                        <div class="video-box about">
                            <img src="/assets/img/paginas/frontend/sobre/about.jpg" class="img-fluid" alt="">
                            <a href="" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                        </div>
                        <!--<img src="images/about.jpg" class="img-fluid" alt="video" data-aos="fade-up">
						<a href="" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
					<!--<iframe width="560" height="315" src="https://www.youtube.com/embed/6twzfiatFxA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                </div>
            </div>
            <div class="col-md-3 m-3 mt-5" data-aos="fade-up" data-aos-delay="150">
                <h2><b>Lorem ipsum dolor sit amet</b></h1>
                    <br><br>
                    <p style="color: grey;font-size: 13px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lobortis, neque et consectetur viverra, metus nulla tempus lacus, in tempus quam ipsum at nisl.</p>
                    <p style="color: grey;font-size: 13px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin volutpat eros ac velit consequat finibus. Vestibulum semper, justo quis tempus imperdiet, massa metus aliquam augue, ut ornare quam felis nec nunc. Nulla fermentum magna nisl, quis congue enim fermentum quis. Nullam varius urna odio, et bibendum nulla tempor congue.</p>
                    <p style="color: grey;font-size: 13px">Pellentesque viverra sem eu purus pulvinar condimentum. Aliquam sodales ante vitae fringilla molestie. Morbi sed mauris ex. Vivamus rutrum pulvinar purus sed pulvinar. Ut accumsan rhoncus sollicitudin. Integer ut enim enim. Phasellus mattis lobortis orci, ut gravida nisl porta vel.</p>
                    <p style="color: grey;font-size: 13px">Ut molestie pellentesque dui, sed dignissim nunc tincidunt ut. Nulla efficitur est et maximus pellentesque. Pellentesque nec fringilla ligula, ac tempus nisl. Ut sed venenatis libero. Nam in est et odio porta aliquet feugiat convallis risus.</p>
            </div>
        </div>
        <br><br><br>
    </div>
    <script src="{{ URL::asset('assets/css/paginas/frontend/vendor/aos/aos.js') }}"></script>
    <script src="{{ URL::asset('assets/js/paginas/frontend/sobre.js') }}"></script>
    @include('includes.frontend.footer')
</body>
</html>
