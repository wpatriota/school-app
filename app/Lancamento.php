<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class Lancamento extends Model
{
    protected $table = 'lancamento';
	
    protected $fillable =   [
        'id',
        'id_aluno',
        'id_membro',
        'descricao',
        'data_vencimento',
        'data_lancamento',
        'id_tipo_lancamento',
        'recebido',
        'status',
        'valor'
    ];

    public function tipoLancamento()
    {
        return $this->hasOne('tenda\TipoLancamento', 'id');
    }
}
