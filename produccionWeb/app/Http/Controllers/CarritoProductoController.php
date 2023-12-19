<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CarritoProducto;
use App\Models\Producto;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoProductoController extends Controller
{
    public function agregar(Request $request)
    {
        $usuario = Auth::user();

        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        $productoId = $request->input('producto_id');
        $cantidad = $request->input('cantidad');
        $tipo = $request->input('tipo');

        $producto = Producto::find($productoId);

        if (!$producto) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $usuario->carrito()->attach($productoId, ['cantidad' => $cantidad, 'tipo' => $tipo]);

        $cantidadProducto = $usuario->carrito()->productos()->find($productoId)->pivot->cantidad;

        return response()->json([
            'message' => 'Producto agregado al carrito correctamente',
            'cantidad_producto' => $cantidadProducto,
        ]);
    }


    public function eliminar($id)
    {
        $productoEnCarrito = CarritoProducto::find($id);

        if (!$productoEnCarrito) {
            return response()->json(['message' => 'Producto no encontrado en el carrito'], 404);
        }

        $productoEnCarrito->delete();

        return response()->json(['message' => 'Producto eliminado del carrito correctamente']);
    }

    public function actualizarCantidad(Request $request)
    {
        $productoId = $request->input('producto_id');
        $cantidad = $request->input('cantidad');

        $user = auth()->user();
        $carritoId = $user->carrito->id;

        $carritoProducto = CarritoProducto::where('producto_id', $productoId)
            ->where('carrito_id', $carritoId)
            ->first();

        if ($carritoProducto) {
            $carritoProducto->cantidad = $cantidad;
            $carritoProducto->save();
            return response()->json(['message' => 'Cantidad actualizada correctamente'], 200);
        }

        return response()->json(['error' => 'No se pudo encontrar el producto en el carrito'], 404);
    }

}
