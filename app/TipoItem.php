<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class TipoItem extends Model
{
    protected $table = 'tipo_item';

    public function estoque(){
    	return $this->hasOne('tenda\Estoque', 'id');
    }
}
