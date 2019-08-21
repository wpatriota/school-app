<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class SaidaEstoque extends Model
{
    protected $table = 'saida_estoque';

    public function individuo()
    {
    	return $this->belongsTo('tenda\Individuo', 'id');
    }

    public function tipoItem()
    {
    	return $this->hasOne('tenda\TipoItem', 'id');
    }
}
