<div class="navv">
    <div class="navbar bb" id="navbar">
        <div class="img" id="imgnav"> </div>
        <ul>
            <li @if (Route::currentRouteName()=='index' ) class="active" @endif><a href="/">Início</a></li>
            <li @if (Route::currentRouteName()=='sobre' ) class="active" @endif><a href="/sobre">Sobre</a></li>
            <li class="dropdown"><a>Vinhos
                <div class="dropdown-content">
                    <section class="stage">
                        <div id="home" class="div">
                            <p onclick="test()" class="p1"><i class="fas fa-arrow-left"></i> Teste</p>
                        </div>
                        <div class="div" id="about">
                            <p onclick="test2()" class="p2">About <i class="fas fa-arrow-right"></i></p>
                        </div>
                        <div class="div" id="contact">
                            <p class="p3">Gallery</p>
                        </div>
                        <div class="div" id="gallery">
                            <p class="p4">Contact</p>
                        </div>
                    </section>
                </div>
                </a>
            </li>
            <li @if (Route::currentRouteName()=='blog' ) class="active" @endif><a href="/blog">Notícias</a></li>
            <li @if (Route::currentRouteName()=='receitas' ) class="active" @endif><a href="/receitas">Receitas</a></li>
            <li @if (Route::currentRouteName()=='contactos' ) class="active" @endif><a href="/contactos">Contactos</a></li>
            <li><a target="_blank" href="http://wineculture.test/loja/">Loja</a></li>
            @if (!Auth::check()) <li @if (Route::currentRouteName()=='login' ) class="active" @endif><a href="{{route('login')}}">Login</a></li>@elseif (Auth::user()->tipouser == "Administrador") <li><a href="{{route('admin_dashboard')}}">Admin</a></li>@endif
        </ul>
        <div class="menu">
            <i id="navbar" class="fa fa-bars"></i>
        </div>
    </div>
</div>