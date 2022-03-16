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

Route::get('/contacto', [App\Http\Controllers\ContactoController::class, 'index'])->name('contacto.index');
Route::post('/contacto', [App\Http\Controllers\ContactoController::class, 'store'])->name('contacto.store');
Route::get('/nosotros', [App\Http\Controllers\NosotrosController::class, 'index'])->name('nosotros');
Route::get('/productos', [App\Http\Controllers\ProductoController::class, 'index'])->name('producto');
Route::get('/servicios', [App\Http\Controllers\ServicioController::class, 'index'])->name('servicio');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('producto', App\Http\Controllers\ProductosController::class)->middleware('auth');
Route::resource('servicio', App\Http\Controllers\ServiciosController::class)->middleware('auth');
