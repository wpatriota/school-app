<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
	protected $table = 'aluno';

	protected $fillable =	[
    	'id',
    	'id_individuo',
    	'id_turma',
    	'data_matricula',
        'valor_mensalidade'
    ];

    public function turma()
    {
        return $this->belongsTo('tenda\Turma', 'id_turma');
    }

    public function individuo()
    {
        return $this->belongsTo('tenda\Individuo', 'id_individuo');
    }

    public function frequenciaColegio()
    {
        return $this->hasMany('tenda\FrequenciaColegio', 'id');
    }
}
