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
        $usuario = Usuario::find(1);

        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        $carrito = $usuario->carrito;

        if (!$carrito) {
            return response()->json(['message' => 'Carrito no encontrado para este usuario'], 404);
        }

        $carrito->productos()->detach($id);

        return response()->json(['message' => 'Producto eliminado del carrito correctamente']);

    }
}
