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




//Home
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [
    ProductoController::class, 'home_destacados'
])->name('index');

//Contacto
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto_index');
Route::post('/contacto', [PreguntaController::class, 'procesarFormulario'])->name('contacto.procesar');

//FAQ
Route::get('/FAQ', [FAQController::class, 'index'])->name('FAQ_index');

//Quienes Somos
Route::get('/quienesSomos', [QuienesSomosController::class, 'index'])->name('quienesSomos_index');


//Productos
Route::resource('/productos', ProductoController::class);
Route::post('/productos/{id}/revisar', [ProductoController::class, 'guardarRevision'])
 ->name('productos.revisar')
 ->middleware('auth');

//Pedidos
Route::resource('/pedidos', PedidoController::class);
Route::resource('pedidos', PedidoController::class);

//Carrito
Route::get('/carrito', [CarritoController::class, 'index'])
    ->name('carrito_index')
    ->middleware('auth');
Route::post('/carrito/agregar-producto', [CarritoController::class, 'agregarProducto'])
    ->name('carrito.agregarProducto')
    ->middleware('auth');;
Route::get('/carrito/{carritoId}', [CarritoController::class, 'mostrarCarrito'])->middleware('auth');

//CarritoProducto
Route::post('/carrito-producto/agregar', [CarritoProductoController::class, 'agregar'])->name('carrito-producto.agregar')->middleware('auth');
Route::delete('/carrito-producto/{id}', [CarritoProductoController::class, 'eliminar'])->name('carrito-producto.eliminar')->middleware('auth');
Route::post('/actualizar-cantidad-producto', [CarritoProductoController::class, 'actualizarCantidad'])
    ->name('carrito-producto.actualizarCantidad')
    ->middleware('auth');


//Revisiones
Route::post('/productos/{id}/revision', [RevisionController::class, 'storeFromUser'])
    ->name('revisiones.storeFromUser')
    ->middleware('auth');


//Admin
Route::get('/admin', [AdminController::class, 'index'])
    ->name('admin_index')
    ->middleware(['auth', 'admin']);
Route::resource('/admin/usuarios', UsuarioController::class)->middleware(['auth', 'admin']);
Route::get('/admin/productos', [ProductoController::class, 'admin_index'])->name('productos.admin_index')->middleware(['auth', 'admin']);
Route::resource('/admin/preguntas', PreguntaController::class)->middleware(['auth', 'admin']);
Route::resource('/admin/revisiones', RevisionController::class)->middleware(['auth', 'admin']);

//Auth
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Auth::routes();
