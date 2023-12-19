<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CarritoProducto extends Model
{
    protected $table = 'carrito_producto';
    protected $fillable = ['carrito_id', 'producto_id', 'cantidad', 'tipo'];

    public function carrito()
    {
        return $this->belongsTo(Carrito::class, 'carrito_id');
    }

    public function getCarritoIdAttribute()
    {
        return $this->carrito_id;
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }


}
