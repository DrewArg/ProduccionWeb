<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'estado',
        'fecha_compra',
        'fecha_entrega',
        'cantidad_productos',
        'producto_id',
        'user_id',
        'editorial',
           ];
}
