<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('paginas.frontend.index');
})->name('index');


Route::get('/contactos', function () {
    return view('paginas.frontend.contactos');
})->name('contactos');
Route::get('/sobre', function () {
    return view('paginas.frontend.sobre');
})->name('sobre');

Route::get('/faq', function () {
    return view('paginas.frontend.faq');
})->name('faq');

Route::get('/sobre_vinhos', function () {
    return view('paginas.frontend.sobre_vinhos');
})->name('sobre_vinhos');

Route::get('/login', function () {
    return view('paginas.frontend.login');
})->name('login');

Route::get('/faq', [App\Http\Controllers\MainController::class, 'faq'])->name('faq');

Auth::routes();

Route::get('/blog', [App\Http\Controllers\MainController::class, 'blog'])->name('blog');

Route::get('/previewblog/{previewblog}', [App\Http\Controllers\MainController::class, 'previewblog'])->name('previewblog');


//Admin
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin_dashboard');

Route::get('/admin/blog', [App\Http\Controllers\AdminController::class, 'blog'])->name('admin_blog');

Route::post('/admin/blog/create', [App\Http\Controllers\AdminController::class, 'inser_blog'])->name('blog.store');

Route::get('/admin/blog/create', [App\Http\Controllers\AdminController::class, 'inserir_blog'])->name('blog.create');

Route::put('/admin/blog/{blog}/update', [App\Http\Controllers\AdminController::class, 'updateBlog'])->name('blog.update');

Route::get('/admin/blog/{blog}/edit/', [App\Http\Controllers\AdminController::class, 'editBlog'])->name('blog.edit');

Route::get('/admin/blog/{blog}/destroy/', [App\Http\Controllers\AdminController::class, 'destroyBlog'])->name('destroy.blog');


