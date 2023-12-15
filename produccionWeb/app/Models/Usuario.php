<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $email
 * @property $password
 * @property $direccion
 * @property $remember_token
 * @property $telefono
 * @property $tipo_usuario
 * @property $id_carrito
 * @property $created_at
 * @property $updated_at
 *
 * @property Pedido[] $pedidos
 * @property Revision[] $revisions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'email' => 'required',
		'password' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'tipo_usuario' => 'required',
		'id_carrito' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','email','password','direccion','telefono','tipo_usuario','id_carrito'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido', 'user_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function revisions()
    {
        return $this->hasMany('App\Models\Revision', 'user_id', 'id');
    }

    public function getAuthIdentifierName()
    {
        return 'id'; 
    }
    

}
