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



//Admin
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin_dashboard');

Route::get('/blog', [App\Http\Controllers\MainController::class, 'blog'])->name('blog');
