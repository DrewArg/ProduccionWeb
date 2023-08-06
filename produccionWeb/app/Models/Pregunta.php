<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pregunta
 *
 * @property $id
 * @property $respondida
 * @property $email
 * @property $nombre
 * @property $preguntas
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pregunta extends Model
{

    static $rules = [
		'respondida' => 'required',
		'email' => 'required',
		'nombre' => 'required',
		'preguntas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['respondida','email','nombre','preguntas'];



}
