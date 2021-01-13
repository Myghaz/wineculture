@extends("paginas.frontend.layout")

@section('title', 'Blog')

@section("links")
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/blog.css') }}">
@endsection

@section("content")

<section>
    <div class="container">
        <main>
            @foreach($blogs as $value)
            <div class="singleBlog">
                <img src="{{ url('assets/img/paginas/frontend/blog/' .$value->img)}}" alt="">
                <div class="blogContent">
                    <h3>{{$value->titulo}}<span>{{$value->categoria}}</span></h3>
                    <p>By <a class="a">{{$value->autor}}</a> | <a class="a">{{$value->data}}</a></p>
                    <a href="{{ route('previewblog', $value) }}" class="btn">Ler Mais</a>
                </div>
            </div>
            @endforeach
        </main>
    </div>
</section>
@section("javascript")
<script src="{{ URL::asset('assets/css/paginas/frontend/vendor/aos/aos.js') }}"></script>
<script src="{{ URL::asset('assets/js/paginas/frontend/sobre_vinhos.js') }}"></script>
@endsection
@endsection