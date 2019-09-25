<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    protected $table = 'aviso';

    public function idUser()
    {
    	return $this->hasOne('tenda\User', 'id');
    }
}
