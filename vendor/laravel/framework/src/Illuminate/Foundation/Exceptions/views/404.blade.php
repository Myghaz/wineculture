
@section("links")
<link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/frontend/error404.css') }}">
@endsection
@section('name')
<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h3>Oops! Page not found</h3>
            <h1><span>4</span><span>0</span><span>4</span></h1>
        </div>
        <h2>we are sorry, but the page you requested was not found</h2>
    </div>
</div>
@endsection

@extends('errors::minimal')
@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
