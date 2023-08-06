<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class CarritoController extends Controller
{
    public function index()
    {
//        $productos = Producto::where('es_activo',1)
//            ->orderBy('updated_at', 'desc')
//            ->paginate(10);
        return view('common.carrito.index', [
//            'productos' => $productos
        ]);
    }

}
