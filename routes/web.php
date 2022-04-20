<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

/*Auth::routes();*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Auth::routes();*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*RUTAS PERSONALIZADAS USUARIO*/
Route::get('/users/create', [App\Http\Controllers\UserController::class,'create'])->name('users.create');
Route::post('/users', [App\Http\Controllers\UserController::class,'store'])->name('users.store');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
/* Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'password'])->name('users.password'); */
Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');
 /* RUTAS PERSONALIZADAS NEGOCIOS */
 Route::get('/negocios/create', [App\Http\Controllers\NegocioController::class,'create'])->name('negocios.create');
 Route::post('/negocios', [App\Http\Controllers\NegocioController::class,'store'])->name('negocios.store');
 Route::get('/negocios', [App\Http\Controllers\NegocioController::class, 'index'])->name('negocios.index');
 Route::get('/negocios/{negocio}', [App\Http\Controllers\NegocioController::class, 'show'])->name('negocios.show');
 Route::get('/negocios/{negocio}/edit', [App\Http\Controllers\NegocioController::class, 'edit'])->name('negocios.edit');
 Route::put('/negocios/{negocio}', [App\Http\Controllers\NegocioController::class, 'update'])->name('negocios.update');
 Route::delete('/negocios/{negocio}', [App\Http\Controllers\NegocioController::class, 'destroy'])->name('negocios.delete');
/* RUTAS PERSONALIZADAS PUBLICAIONES */
Route::get('/publicaciones/create', [App\Http\Controllers\PublicacionController::class,'create'])->name('publicaciones.create');
Route::post('/publicaciones', [App\Http\Controllers\PublicacionController::class,'store'])->name('publicaciones.store');
Route::get('/publicaciones', [App\Http\Controllers\PublicacionController::class, 'index'])->name('publicaciones.index');
Route::get('/publicaciones/{publicacion}', [App\Http\Controllers\PublicacionController::class, 'show'])->name('publicaciones.show');
Route::get('/publicaciones/{publicacion}/edit', [App\Http\Controllers\PublicacionController::class, 'edit'])->name('publicaciones.edit');
Route::put('/publicaciones/{publicacion}', [App\Http\Controllers\PublicacionController::class, 'update'])->name('publicaciones.update');
Route::delete('/publicaciones/{publicacion}', [App\Http\Controllers\PublicacionController::class, 'destroy'])->name('publicaciones.delete');

/* RUTAS PARA LA VISTA DEL CLIENTE */
Route::get('/inicio', [App\Http\Controllers\ClienteController::class, 'cliente'])->name('cliente.inicio');    
Route::get('/publications', [App\Http\Controllers\ClienteController::class, 'publicaciones'])->name('cliente.publicaciones');
Route::get('/servicios', [App\Http\Controllers\ClienteController::class, 'servicios'])->name('cliente.servicios');
Route::get('/hospedaje', [App\Http\Controllers\ClienteController::class, 'hospedaje'])->name('cliente.hospedaje');
Route::get('/transporte', [App\Http\Controllers\ClienteController::class, 'transporte'])->name('cliente.transporte');
Route::get('/gastronomia', [App\Http\Controllers\ClienteController::class, 'gastronomia'])->name('cliente.gastronomia');
Route::get('/atraccion', [App\Http\Controllers\ClienteController::class, 'atraccion'])->name('cliente.atraccion');
Route::get('/servicio/transporte', [App\Http\Controllers\ClienteController::class, 'show_transporte'])->name('cliente.servicio.transporte');