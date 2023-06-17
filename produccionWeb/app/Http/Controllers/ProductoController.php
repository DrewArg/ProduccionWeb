<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    //accion principal de este cnotrller
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index',[
        'productos'=>$productos
        ]);
    }

    public function show(Producto $producto)
    {
        return view('productos.detalle_producto', [
            'producto'=>$producto
        ]);
    }


}
