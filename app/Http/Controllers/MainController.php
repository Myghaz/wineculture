<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class MainController extends Controller
{
    public function login() {
        return view('paginas.frontend.login');
    }
    public function blog() {
        $blogs = Blog::all();
        return view('paginas.frontend.blog', ['blogs' => $blogs]);
    }
}
