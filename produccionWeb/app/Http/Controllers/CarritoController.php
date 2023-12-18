<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Carrito;
use App\Models\Producto;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function index()
    {
        $usuario = Usuario::find(1);

        if (!$usuario) {
            return redirect()->route('login')->with('error', 'Usuario no encontrado');
        }

        $carrito = $usuario->carrito()->firstOrCreate([]);

        $productos = $carrito->productos;
        $total = $productos->sum(function ($producto) {
            return $producto->precio * $producto->pivot->cantidad;
        });

        return view('common.carrito.index', [
            'carrito' => $carrito,
            'productos' => $productos,
            'total' => $total,
        ]);
    }

    public function agregarProducto(Request $request)
    {
        $usuario = Usuario::find(1);

        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        $carrito = $usuario->carrito()->firstOrCreate([]);

        if (!$carrito) {
            $carrito = new Carrito();
            $carrito->save();

            $usuario->carrito()->associate($carrito);
            $usuario->save();
        }

        $productoId = $request->input('producto_id');
        $cantidad = $request->input('cantidad');
        $tipo = $request->input('tipo');

        $producto = Producto::find($productoId);

        if (!$producto) {
            return response()->json(['message' => 'El producto no existe'], 404);
        }

        $carritoProducto = $carrito->productos()->where('producto_id', $productoId)->first();

        if ($carritoProducto) {
            if ($tipo === 'sumar') {
                $carritoProducto->pivot->update(['cantidad' => $carritoProducto->pivot->cantidad + 1]);
            } elseif ($tipo === 'restar' && $cantidad > 1) {
                $carritoProducto->pivot->update(['cantidad' => $carritoProducto->pivot->cantidad - 1]);
            }
        } else {
            $carrito->productos()->attach($productoId, ['cantidad' => $cantidad]);
        }

        $total = $carrito->productos->sum(function ($producto) {
            return $producto->precio * $producto->pivot->cantidad;
        });

        return response()->json([
            'message' => 'Producto actualizado en el carrito.',
            'total' => $total,
        ]);
    }
}
