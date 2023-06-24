<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;

Route::get('/',[
    ProductoController::class,'home_destacados'
])->name('index');

//crea todas las rutas con sus respectivos nombres
Route::resource('productos',ProductoController::class);

Route::resource('/pedidos',PedidoController::class);

Route::resource('/usuarios', UsuarioController::class);

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
