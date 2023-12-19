<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CarritoProductoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\QuienesSomosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\RevisionController;



Route::get('/', [
    ProductoController::class, 'home_destacados'
])->name('index');

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/productos', ProductoController::class);
Route::resource('/pedidos', PedidoController::class);
Route::get('/carrito', [CarritoController::class, 'index'])
    ->name('carrito_index')
    ->middleware('auth');
Route::post('/carrito/agregar', [CarritoController::class, 'agregarProducto'])->name('carrito.agregar');
Route::get('/carrito/{carritoId}', [CarritoController::class, 'mostrarCarrito']);

Route::post('/carrito-producto/agregar', [CarritoProductoController::class, 'agregar'])->name('carrito-producto.agregar');
Route::delete('/carrito-producto/{id}', [CarritoProductoController::class, 'eliminar'])->name('carrito-producto.eliminar');

Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto_index');
Route::get('/FAQ', [FAQController::class, 'index'])->name('FAQ_index');
Route::get('/quienesSomos', [QuienesSomosController::class, 'index'])->name('quienesSomos_index');

Route::get('/admin', [AdminController::class, 'index'])->name('admin_index');
Route::resource('/admin/usuarios', UsuarioController::class);
Route::get('/admin/productos', [ProductoController::class, 'admin_index'])->name('productos.admin_index');
Route::resource('/admin/preguntas', PreguntaController::class);
Route::resource('/admin/revisiones', RevisionController::class);
Route::post('/contacto', [PreguntaController::class, 'procesarFormulario'])->name('contacto.procesar');
Route::resource('pedidos', PedidoController::class);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Auth::routes();
