<?php

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
Route::resource('/productos',ProductoController::class);

Route::resource('/pedidos',PedidoController::class);



Route::get('/admin', [AdminController::class, 'index'])->name('admin_index');
Route::resource('/admin/usuarios', UsuarioController::class);
Route::get('/admin/productos',[ProductoController::class,'admin_index'])->name('productos.admin_index');

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('preguntas', PreguntaController::class);

Route::resource('revisions', RevisionController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
