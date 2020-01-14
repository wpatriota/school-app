<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;
use tenda\User;

class Turma extends Model
{
	protected $table = 'turma';
	
    protected $fillable =   [
        'id',
        'id_curso',
        'id_professor',
        'nome',
        'data_inicio',
        'periodo_matricula_de',
        'periodo_matricula_ate',
        'dia_aula',
        'horario_aula',
        'frequencia_minima'
    ];

    public function aluno()
    {
        return $this->hasMany('tenda\Aluno', 'id');
    }

    public function curso()
    {
        return $this->belongsTo('tenda\Curso', 'id_curso');
    }

    public function professor()
    {
        return $this->belongsTo('tenda\Professor', 'id_professor');
    }

    public function getAlunoByUser(User $user){
        
    }
}
