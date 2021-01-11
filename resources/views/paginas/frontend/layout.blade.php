<!doctype html>
<html>

<head>
    <title>@yield("title")</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/vendor/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/vendor/boxicons/css/boxicons.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/vendor/venobox/venobox.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/vendor/owl.carousel/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/vendor/aos/aos.css') }}" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
   <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/index.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/includes/frontend/navbar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/includes/frontend/settings.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/includes/frontend/footer.css') }}">


    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/receitas.css') }}">

    <link rel="shortcut icon" href="public\favicon.ico" type="image/x-icon">
    <link rel="icon" href="public\favicon.ico" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    @include('includes.frontendnew.navbar')

    @include('includes.frontendnew.settings')
    @yield("content")

    @include('includes.frontendnew.footer')


    <a href="# " class="back-to-top "><i class="icofont-simple-up "></i></a>
    <script src="https://kit.fontawesome.com/06fb76c620.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::asset('assets/css/paginas/frontend/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ URL::asset('assets/css/paginas/frontend/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
    <script src="{{ URL::asset('assets/css/paginas/frontend/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ URL::asset('assets/css/paginas/frontend/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('assets/css/paginas/frontend/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ URL::asset('assets/css/paginas/frontend/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('assets/css/paginas/frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('assets/css/paginas/frontend/vendor/aos/aos.js') }}"></script>
    <script src="{{ URL::asset('assets/js/layouts/frontend/navbar.js') }}"></script>
    <script src="{{ URL::asset('assets/js/layouts/frontend/settings.js') }}"></script>

    <script src="{{ URL::asset('assets/js/paginas/frontend/index.js') }}"></script>

    @yield("javascript")
</body>
</html>
