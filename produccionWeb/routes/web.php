<?php

use Illuminate\Support\Facades\Route;

use App\Models\Producto;

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


Route::get('/', function () {
    return view('index');
});

Route::get('/test/{id}', function(int $id){
    $producto = Producto::find($id);
//    $producto->precio = 1234.0;
    $producto->update([
        'precio' => 5555.50
    ]);
    return $producto;
});

//Route::get('/test/{id}', function(int $id){
//   $producto = Producto::find($id);
//   return $producto;
//});

Route::get('/test',function (){
   $producto = Producto::create([
       'titulo'=> 'Thrawn',
       'sinopsis' => 'Basado en la novela del The New York Times, de Timothy Zahn',
       'stock'=>50,
       'precio'=>1500.0,
       'autor'=>'Timothy Zahn',
       'genero'=>'Ciencia Ficcion',
       'editorial'=>'Panini Comics',
       'tipo_producto'=>'Fisico',
       'imagen'=>'https://tap-multimedia-1172.nyc3.digitaloceanspaces.com/productimage/17494/9786075487335.jpg',
       'puntuacion'=>4.5
    ]);
    return "El libro se guardó correctamente con el id {$producto->id}";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
