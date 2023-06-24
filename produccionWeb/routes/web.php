<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;

//Route::get('/', function () {
//    return view('index');
//})->name('index');

Route::get('/',[
    ProductoController::class,'home_destacados'
])->name('index');

Route::get('/productos',[
    ProductoController::class, 'index'
])->name('productos.index');

Route::get('/productos/{producto}',[
    ProductoController::class, 'show'
])->name('productos.show');

//crea todas las rutas con sus respectivos nombres
Route::resource('/pedidos',PedidoController::class);

Route::resource('/usuarios', UsuarioController::class);

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
