<?php

use App\Http\Controllers\CarritoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\RevisionController;


Route::get('/',[
    ProductoController::class,'home_destacados'
])->name('index');

//crea todas las rutas con sus respectivos nombres
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/productos',ProductoController::class);
Route::resource('/pedidos',PedidoController::class);
Route::get('/carrito', [CarritoController::class,'index'])->name('carrito_index');

Route::get('/admin', [AdminController::class, 'index'])->name('admin_index');
Route::resource('/admin/usuarios', UsuarioController::class);
Route::get('/admin/productos',[ProductoController::class,'admin_index'])->name('productos.admin_index');
Route::resource('/admin/preguntas', PreguntaController::class);
Route::resource('/admin/revisiones', RevisionController::class);

Auth::routes();
