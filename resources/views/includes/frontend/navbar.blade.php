<html>

<head>
    @extends ('includes.frontend.head')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/includes/frontend/navbar.css') }}">
</head>
<body>
    <div class="navv">
        <div class="navbar bb" id="nav">
            <div class="img" id="imgnav"> </div>
            <ul>
                <li><a href="/">Início</a></li>
                <li><a href="/sobre_vinhos">Sobre Vinhos</a></li>
                <li><a href="/sobre">Sobre</a></li>
                <li><a href="/contactos">Contacte-nos!</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
            <div class="menu">
                <i id="navbar" class="fa fa-bars"></i>
            </div>
        </div>
        @include('includes.frontend.settings')
    </div>
    @include('includes.frontend.scripts')
    <script src="{{ URL::asset('assets/js/layouts/frontend/navbar.js') }}"></script>
</body>
</html>