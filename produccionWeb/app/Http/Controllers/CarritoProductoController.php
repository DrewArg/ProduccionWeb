<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CarritoProducto;
use Illuminate\Http\Request;

class CarritoProductoController extends Controller
{
    public function agregarProducto(Request $request)
    {
        $productoId = $request->input('producto_id');
        $cantidad = $request->input('cantidad');
        $tipo = $request->input('tipo');


        $carritoProducto = new CarritoProducto();
        $carritoProducto->carrito_id = 1;
        $carritoProducto->producto_id = $productoId;
        $carritoProducto->cantidad = $cantidad;
        $carritoProducto->tipo = $tipo;
        $carritoProducto->save();

        return response()->json(['message' => 'Producto agregado al carrito correctamente']);
    }
}
