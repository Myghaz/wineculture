@extends("paginas.frontend.layout")

@section('title', 'Politica de Privacidade')

@section("links")
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/perfil_publico.css') }}">
@endsection

@section("content")


<header class="header-left">
</header>
<main>
    <div class="row">
        <div class="left">
            <div class="photo-left">
                <img class="photo" src="https://images.pexels.com/photos/1804796/pexels-photo-1804796.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" />
            </div>
            <h4 class="name">Jane Doe</h4>
            <p class="info">UI/UX Designer</p>
            <p class="info">jane.doe@gmail.com</p>
            <div class="stats row">
                <div class="stat col-xs-4" style="padding-right: 50px;">
                    <p class="number-stat">3,619</p>
                    <p class="desc-stat">Followers</p>
                </div>
                <div class="stat col-xs-4">
                    <p class="number-stat">42</p>
                    <p class="desc-stat">Following</p>
                </div>
                <div class="stat col-xs-4" style="padding-left: 50px;">
                    <p class="number-stat">38</p>
                    <p class="desc-stat">Uploads</p>
                </div>
            </div>
        </div>
        <div class="right">
            <section class="timeline">
                <div class="container">
                    <section class="timeline">
                        <div class="container">
                            @foreach ($array as $key=>$item)
                            <div class="timeline-item" endif>
                                <div class="timeline-img"></div>
                                @if ((++$key % 2) == 0)
                                <div class="timeline-content timeline-card  js--fadeInRight">
                                    @else
                                    <div class="timeline-content timeline-card  js--fadeInLeft">
                                        @endif
                                        <div class="timeline-img-header" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, .4)), url({{asset($item->img)}}) center center no-repeat;background-size: cover;">
                                            <h2>{{$item->titulo}}</h2>
                                        </div>
                                        <div class="date">{{ date('d-m-Y', strtotime($item->created_at))}}</div>
                                        <p>{{$item->desc}}</p>
                                        @if ($item->tabela == "vinhos")
                                        <a class="bnt-more" href="{{route('vinho',['vinho'=>$item->id] )}}">Ver</a>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                    </section>
                </div>
            </section>
</main>
</div>
@endsection
@section("javascript")
<script src="{{ URL::asset('assets/js/paginas/frontend/perfil_publico.js') }}"></script>
<script src='https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js'></script>
<script src="./script.js"></script>
@endsection