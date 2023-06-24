<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $titulo
 * @property $sinopsis
 * @property $stock
 * @property $precio
 * @property $autor
 * @property $genero
 * @property $editorial
 * @property $tipo_producto
 * @property $imagen
 * @property $puntuacion
 * @property $lenguaje
 * @property $es_activo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    use HasFactory;

    static $rules = [
        'titulo' => 'required',
        'sinopsis' => 'required',
        'stock' => 'required',
        'precio' => 'required',
        'autor' => 'required',
        'genero' => 'required',
        'editorial' => 'required',
        'tipo_producto' => 'required',
        'imagen' => 'required',
        'lenguaje' => 'required',
        ];

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
        'puntuacion',
        'lenguaje',
        'es_activo'
    ];
}
