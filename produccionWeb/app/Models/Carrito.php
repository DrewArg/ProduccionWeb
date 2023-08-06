<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'carrito_producto', 'carrito_id', 'producto_id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function mostrarCarrito($carritoId)
    {

        $carrito = Carrito::find($carritoId);

        $productosEnCarrito = $carrito->productos;

        $usuarioDelCarrito = $carrito->usuario;

        return view('carrito', [
            'carrito' => $carrito,
            'productosEnCarrito' => $productosEnCarrito,
            'usuarioDelCarrito' => $usuarioDelCarrito,
        ]);
    }
}
