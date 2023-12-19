<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'carrito_producto', 'carrito_id', 'producto_id')
            ->withPivot('cantidad');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function carritoProducto()
    {
        return $this->hasMany(CarritoProducto::class);
    }

}
