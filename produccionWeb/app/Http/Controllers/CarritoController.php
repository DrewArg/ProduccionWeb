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

        $total = $productos->sum('precio');

        return view('common.carrito.index', [
            'productos' => $productos,
            'total' => $total,
        ]);
    }

    public function agregarProducto(Request $request)
    {
        $productoId = $request->input('producto_id');
        $cantidad = $request->input('cantidad');
        $tipo = $request->input('tipo');

        $carrito = Carrito::find(1);

        if ($carrito->productos->contains($productoId)) {
            if ($tipo === 'sumar') {
                $carrito->productos()->updateExistingPivot($productoId, [
                    'cantidad' => DB::raw('cantidad + 1'), 
                ]);
            } elseif ($tipo === 'restar' && $cantidad > 1) {
                $carrito->productos()->updateExistingPivot($productoId, [
                    'cantidad' => DB::raw('cantidad - 1'), 
                ]);
            }
        } else {
            $carrito->productos()->attach($productoId, [
                'cantidad' => $cantidad,
                'tipo' => $tipo,
            ]);
        }

        $productos = $carrito->productos;
        $total = $productos->sum(function ($producto) {
            return $producto->precio * $producto->pivot->cantidad;
        });

        return response()->json([
            'message' => 'Producto actualizado en el carrito.',
            'total' => $total,
        ]);
    }
}
