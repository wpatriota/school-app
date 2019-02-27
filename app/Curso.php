<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
	protected $table = 'curso';

    protected $fillable =	[
    	'id',
    	'nome',
    	'descricao',
        'valor_mensalidade'
    ];

    public function turma()
    {
        return $this->belongsToMany('tenda\Turma', 'id_curso');
    }
}
