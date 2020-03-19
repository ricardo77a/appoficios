<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    protected $fillable = ['nombre', 'edad', 'rfc', 'descripcion',  'direccion', 'oficio_id', 'user_id'];

    public function oficio()
    {
    	return $this->belongsTo('App\Oficio', 'oficio_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function citas()
    {
        return $this->hasMany('App\Cita');
    }
}
