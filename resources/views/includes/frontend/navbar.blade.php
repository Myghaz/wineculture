<div class="navv">
    <div class="navbar bb" id="navbar">
        <div class="img" id="imgnav"> </div>
        <ul>
            <li @if (Route::currentRouteName()=='index' ) class="active" @endif><a href="/">Início</a></li>
            <li @if (Route::currentRouteName()=='sobre' ) class="active" @endif><a href="/sobre">Sobre</a></li>
            <li>
                <div class="dropdown">
                    <button class="dropbtn">Vinho</button>
                    <div class="dropdown-content">
                        <a href="/vinhos">Vinhos</a>
                        <a href="/sobre_vinhos">Sobre Vinhos</a>
                    </div>
                  </div>
                 </li>
            <!--<li @if (Route::currentRouteName()=='vinhos' ) class="active" @endif><a href="/vinhos">Vinhos</a></li>
            <li @if (Route::currentRouteName()=='sobre_vinhos' ) class="active" @endif><a href="/sobre_vinhos">Sobre Vinhos</a></li>-->
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
