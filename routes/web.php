<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\WelcomeController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [WelcomeController::class, 'blogs'])->name('blogs.welcome');
/* 
Route::middleware(['auth:sanctum', 'verified'])->get('/',  [WelcomeController::class, 'blogs'],function () {
  return view('welcome');
})->name('blogs.welcome'); */
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); 


Route::resource('blogs', BlogController::class);

Route::group(['middleware' => ['auth']], function () {
  Route::resource('roles', RolController::class);
  Route::resource('usuarios', UsuarioController::class);
  
  Route::resource('imagens', ImagenController::class);
  Route::resource('comentarios', ComentarioController::class);
  
});



