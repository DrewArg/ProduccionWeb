<?php

namespace App\Http\Controllers;

use App\Models\CarritoProducto;
use App\Models\Usuario;
use App\Models\Carrito;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    public function index()
    {
        $usuario = Auth::user();

        if (!$usuario) {
            return redirect()->route('login')->with('error', 'Usuario no encontrado');
        }

        $carrito = $usuario->carrito()->firstOrCreate([]);

        $productos = $carrito->productos;

        foreach ($productos as $producto) {
            info('ID del producto: ' . $producto->id);
            info('Cantidad en carrito: ' . $producto->pivot->cantidad);
        }

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
        $usuario = Auth::user();

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
            $carrito->productos()->attach($productoId, [
                'cantidad' => $cantidad,
                'tipo' => $tipo
            ]);
        }

        $total = $carrito->productos->sum(function ($producto) {
            return $producto->precio * $producto->pivot->cantidad;
        });

        info('Producto agregado al carrito correctamente');

        return response()->json([
            'message' => 'Producto agregado al carrito correctamente',
            'productos' => $carrito->productos,
            'total' => $total,
        ]);
    }


}
