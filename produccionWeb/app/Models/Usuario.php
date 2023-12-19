<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuarios'; // Define el nombre de la tabla

    static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'email' => 'required',
        //'password' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'tipo_usuario' => 'required',
        'id_carrito' => 'required',
    ];

    public function isAdmin()
    {
        return $this->tipo_usuario === 1; 
    }


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellido', 'email', 'password', 'direccion', 'telefono', 'tipo_usuario', 'id_carrito'
    ];

    /**
     * Relación con pedidos
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido', 'user_id', 'id');
    }

    /**
     * Relación con revisiones
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function revisions()
    {
        return $this->hasMany('App\Models\Revision', 'user_id', 'id');
    }

    // Otros métodos y propiedades relevantes para el modelo

    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function carrito()
    {
        return $this->belongsTo(Carrito::class, 'id_carrito');
    }
}
