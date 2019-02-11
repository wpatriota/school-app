<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
	protected $table = 'turma';
	
    protected $fillable =   [
        'id',
        'nome',
        'data_inicio'
    ];

    public function aluno()
    {
        return $this->hasMany('tenda\Aluno');
    }

    public function curso()
    {
        return $this->belongsTo('tenda\Curso', 'id_curso');
    }

    public function professor()
    {
        return $this->belongsTo('tenda\Individuo', 'id_professor');
    }
}
