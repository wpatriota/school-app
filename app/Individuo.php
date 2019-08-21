<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class Individuo extends Model
{
	protected $table = 'individuo';

    protected $fillable =   [
        'nome',
        'user_id',
        'sobrenome',
        'rg',
        'cpf',
        'email',
        'telefone',
        'celular',
        'endereco',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'data_nascimento',
        'estado_civil',
        'profissao',
        'observacao'
    ];

    public function aluno()
    {
        return $this->belongsTo('tenda\Aluno', 'id_aluno');
    }

    public function membro()
    {
        return $this->belongsTo('tenda\Membro', 'id_membro');
    }

    public function professor()
    {
        return $this->belongsTo('tenda\Professor', 'id_professor');
    }

    public function grupoLimpeza()
    {
        return $this->hasOne('tenda\GrupoLimpeza', 'id');
    }

    public function entradaEstoque()
    {
        return $this->hasMany('tenda\EntradaEstoque', 'id');
    }

    public function saidaEstoque()
    {
        return $this->hasMany('tenda\SaidaEstoque', 'id');
    }
}
