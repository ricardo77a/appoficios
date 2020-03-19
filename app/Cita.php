<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'citas';
    protected $fillable = ['fecha', 'hora', 'cliente_id', 'proveedor_id'];

    public function cliente()
    {
    	return $this->belongsTo('App\Cliente', 'cliente_id');
    }

    public function proveedor()
    {
    	return $this->belongsTo('App\Proveedor', 'proveedor_id');
    }
}
