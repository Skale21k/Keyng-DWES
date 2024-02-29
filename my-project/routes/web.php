<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaypalController;
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
    Route::get('/productos/create',  'create')->name('productos.create')->middleware('admin');
    Route::post('/productos', 'store')->name('productos.store')->middleware('admin');
    Route::post('/productos/filtro', 'filtro')->name('productos.filtro');
    Route::get('/productos/{id}', 'show')->name('productos.show');
    Route::get('/admin/productos', 'verProductos')->name('admin.productos')->middleware('admin');
    Route::delete('/productos/{producto}', 'destroy')->name('productos.destroy')->middleware('admin');
    Route::get('/productos/{producto}/edit', 'edit')->name('productos.edit')->middleware('admin');
    Route::put('/productos/{producto}', 'update')->name('productos.update')->middleware('admin');
});

//Rutas de usuarios
Route::controller(UsuarioController::class)->group(function () {
    Route::get('/usuarios', 'index')->name('usuarios.index');
    Route::get('/usuarios/create',  'create')->name('usuarios.create');
    Route::post('/usuarios', 'store')->name('usuarios.store');
    Route::get('/login', 'login')->name('usuarios.login');
    Route::post('/login', 'auth')->name('usuarios.auth');
    Route::post('/logout', 'logout')->name('usuarios.logout');
    Route::get('/admin/users', 'verUsuarios')->name('admin.users')->middleware('admin');
    Route::delete('/usuarios/{usuario}', 'destroy')->name('usuarios.destroy')->middleware('admin');
    Route::get('/usuarios/{usuario}/edit', 'edit')->name('usuarios.edit')->middleware('auth');
    Route::put('/usuarios/{usuario}', 'update')->name('usuarios.update')->middleware('auth');
});

//Rutas de carrito
Route::controller(CartController::class)->group(function () {
    Route::post('/cart/add', 'add')->name('carrito.add')->middleware('auth');
    Route::get('/cart/checkout', 'checkout')->name('carrito.checkout')->middleware('auth');
    Route::get('/cart/clear', 'clear')->name('carrito.clear')->middleware('auth');
    Route::post('/cart/remove', 'remove')->name('carrito.remove')->middleware('auth');
});

//Rutas de paypal
Route::controller(PaypalController::class)->group(function () {
    Route::post('/paypal/pay', 'pagoPayPal')->name('pago.paypal');
    Route::get('/paypal/status', 'status')->name('pago.status');
});
