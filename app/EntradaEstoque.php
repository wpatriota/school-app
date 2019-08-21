<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class EntradaEstoque extends Model
{
    protected $table = 'entrada_estoque';

    protected $fillable =   [
        'id',
        'quantidade',
        'id_unidade_medida',
        'data_entrada'
    ];

    public function tipoItem()
    {
        return $this->hasOne('tenda\TipoItem', 'id');
    }

    public function unidadeMedida()
    {
        return $this->hasOne('tenda\unidadeMedida', 'id_unidade_medida');
    }

    public function individuo()
    {
        return $this->belongsTo('tenda\Individuo', 'id');
    }
}
