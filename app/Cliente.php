<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = ['nombre', 'paterno', 'materno', 'curp', 'rfc', 'direccion', 'user_id'];

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
