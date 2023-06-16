<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
      'titulo',
      'sinopsis',
      'stock',
      'precio',
      'autor',
      'genero',
      'editorial',
      'tipo_producto',
      'imagen',
      'puntuacion'
    ];
}
