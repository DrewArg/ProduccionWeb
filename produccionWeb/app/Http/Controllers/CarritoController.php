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

    public function agregarProducto(Request $request)
    {
        $productoId = $request->input('producto_id');
        $cantidad = $request->input('cantidad');
        $tipo = $request->input('tipo');

        $carrito = Carrito::find(1);

        if ($carrito->productos->contains($productoId)) {
            $carrito->productos()->updateExistingPivot($productoId, [
                'cantidad' => $cantidad,
                'tipo' => $tipo,
            ]);
        } else {
            $carrito->productos()->attach($productoId, [
                'cantidad' => $cantidad,
                'tipo' => $tipo,
            ]);
        }

        return response()->json(['message' => 'Producto agregado al carrito correctamente.']);
    }


}
