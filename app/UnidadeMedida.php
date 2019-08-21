<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class UnidadeMedida extends Model
{
    protected $table = 'unidade_medida';

    public function entradaEstoque()
    {
        return $this->belongsTo('tenda\EntradaEstoque', 'id');
    }

    public function saidaEstoque()
    {
        return $this->belongsTo('tenda\SaidaEstoque', 'id');
    }
}
