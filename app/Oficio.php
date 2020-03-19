<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oficio extends Model
{
    protected $table = 'oficios';
    protected $fillabe = 'oficio';

    public function proveedores()
    {
    	return $this->hasMany('App\Proveedor');
    }
}
