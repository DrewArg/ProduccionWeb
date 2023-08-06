<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

/**
 * Class Usuario
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $email
 * @property $clave
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model implements Authenticatable
{

    use AuthenticableTrait;

    protected $table = 'usuarios';

    static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'email' => 'required',
        'password' => 'required',
    ];

    protected $perPage = 7;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','email','password'];



}
