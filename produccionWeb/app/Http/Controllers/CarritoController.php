<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class CarritoController extends Controller
{
    public function index()
    {
        $carrito = Carrito::find(1);

        $productos = $carrito->productos;

        return view('common.carrito.index', [
            'productos' => $productos
        ]);
    }


}
