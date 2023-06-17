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
        return $productos;
    }

    public function show(Producto $producto)
    {

    }


}
