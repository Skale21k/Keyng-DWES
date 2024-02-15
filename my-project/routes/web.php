<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Ruta de Home
Route::get('/', HomeController::class)->name('home');


//Rutas de productos
Route::controller(ProductoController::class)->group(function () {
    Route::get('/productos', 'index')->name('productos.index');
    Route::get('/productos/create',  'create')->name('productos.create')->middleware('auth');
    Route::post('/productos', 'store')->name('productos.store')->middleware('auth');
    Route::post('/productos/filtro', 'filtro')->name('productos.filtro');
    Route::get('/productos/{id}', 'show')->name('productos.show');
});

Route::controller(UsuarioController::class)->group(function () {
    Route::get('/usuarios', 'index')->name('usuarios.index');
    Route::get('/usuarios/create',  'create')->name('usuarios.create');
    Route::post('/usuarios', 'store')->name('usuarios.store');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'login')->name('usuarios.login');
});
