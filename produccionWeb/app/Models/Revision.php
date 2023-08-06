<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Revision
 *
 * @property $id
 * @property $producto_id
 * @property $user_id
 * @property $puntuacion
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto $producto
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Revision extends Model
{
    
    static $rules = [
		'producto_id' => 'required',
		'user_id' => 'required',
		'puntuacion' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['producto_id','user_id','puntuacion','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'producto_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
