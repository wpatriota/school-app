<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class TipoLancamento extends Model
{
    protected $table = 'tipo_lancamento';

    protected $fillable =   [
        'id',
        'tipo',
        'descricao'
    ];

    public function lancamento()
    {
        return $this->belongsTo('tenda\lancamento', 'id');
    }
}
