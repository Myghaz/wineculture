<!doctype html>
<html>

<head>
    @section('title', 'Login')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/login.css') }}">
</head>

<body>
    @include('includes.frontend.navbar')
    @yield('content')
    <div class="backimg">
    <div class="forms">
        <form class="signIn" method="POST" action="{{ route('login') }}">
            @csrf
            <h3>Bem-vindo</br>de Volta !</h3>
            <h5>Insira o seu Email</h5>
            <input type="email" placeholder="&#xf007;&nbsp; Email" name="email" id="signinemail" autocomplete='off' required />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <h5>Insira a sua Password</h5>
            <input type="password" id="signinpassword" placeholder="&#xf023; &nbsp; Password" name="password" required />
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="lembrar">
                <input type="checkbox" name="remember" id="cbx" class="checkb" style="display: none;" {{ old('remember') ? 'checked' : '' }}>
                <label for="cbx" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                </label>
                <label for="cbx" class="lembrar">Lembrar-me</label>
            </div>
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Esqueceu-se da Password?') }}ss
   <button class="form-btn dx" type="submit">Log In</button>
            <button class="form-btn sx back" type="button">Criar Conta</button>
        </form>
        <form class="signUp">
            <h3>Criar Conta</h3>
            <p class="paragrafo">Crie a sua conta e junte-se a nós!</p>
            <h5>Insira o seu Email</h5>
            <input class="w100" placeholder="&#xf007;&nbsp; Email" id="signupemail" type="email" required autocomplete='off' />
            <h5>Insira a sua Password</h5>
            <input type="password" placeholder="&#xf007;&nbsp; Password" id="signuppassword" required />
            <h5>Confirme a sua Password</h5>
            <input type="password" placeholder="&#xf007;&nbsp; Confirmar Password" id="signupcpassword" required />
            <button class="form-btn dx" type="submit">Criar Conta</button>
            <button class="form-btn sx log-in" type="button">Já tem Conta?</button>
        </form>
    </div>
    </div>
    <script src="{{ URL::asset('assets/js/paginas/frontend/login.js') }}"></script>
</body>

</html>


