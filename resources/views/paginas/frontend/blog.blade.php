<!doctype html>
<html>

<head>
    @section('title', 'Blog')
    @include('includes.frontend.head')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/blog.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    @include('includes.frontend.navbar')
    <section>
        <div class="container">
            @foreach($blogs as $value)
            <main>
                <div class="singleBlog">
                    <img src="{{ url('assets/img/paginas/frontend/blog/' .$value->img)}}" alt="">
                    <div class="blogContent">
                        <h3>{{$value->titulo}}<span>{{$value->categoria}}</span></h3>
                        <p>By <a href="#">{{$value->autor}}</a> | <a href="#">{{$value->data}}</a></p>
                        <a href="\previewblog?id={{$value->id}}" class="btn">Read More</a>
                    </div>
                </div>
            </main>
            @endforeach
        </div>
    </section>


</body>
@include('includes.frontend.footer')
</html>
