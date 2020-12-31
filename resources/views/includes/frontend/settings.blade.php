<html>

<head>
    @extends ('includes.frontend.head')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/includes/frontend/settings.css') }}">
</head>

<body>
    <span onclick="switchTheme()" id="toggle" class="toggle"></span>
    <span class="wave"></span>



    @if (Auth::check())
    <div class="pie pie1" onclick="document.body.classList.remove('active')">
        <a href="/logout">
            <div class="pie-color pie-color1">
                <img src="/assets/img/paginas/frontend/profile.png" class="profile" title="Perfil"></img>
            </div>
        </a>
    </div>
    <div class="pie pie2" onclick="document.body.classList.remove('active')">
        <a href="/chat">
            <div class="pie-color pie-color2">
                <img src="/assets/img/paginas/frontend/chat.png" class="chat" title="Chat"></img>
            </div>
        </a>
    </div>
    <div class="pie pie3" onclick="document.body.classList.remove('active')">
        <div class="pie-color pie-color3">
            <img src="/assets/img/paginas/frontend/logout.png" class="logout" title="Logout" class="fas fa-sign-out-alt"></img>
        </div>
    </div>
    <div class="menuu" onclick="document.body.classList.toggle('active')">
        <svg class="hamburger" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
            <g fill="none" stroke="#000" stroke-width="7.999" stroke-linecap="round">
                <path d="M 55,26.000284 L 24.056276,25.999716" />
                <path d="M 24.056276,49.999716 L 75.943724,50.000284" />
                <path d="M 45,73.999716 L 75.943724,74.000284" />
                <path d="M 75.943724,26.000284 L 45,25.999716" />
                <path d="M 24.056276,73.999716 L 55,74.000284" />
            </g>
        </svg>
    </div>
    @endif
    <script src="{{ URL::asset('assets/js/layouts/frontend/settings.js') }}"></script>
</body>

</html>