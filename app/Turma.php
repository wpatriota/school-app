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
        'nome',
        'data_inicio',
        'periodo_matricula_de',
        'periodo_matricula_ate'
    ];

    public function aluno()
    {
        return $this->hasMany('tenda\Aluno', 'id');
    }

    public function curso()
    {
        return $this->hasOne('tenda\Curso', 'id');
    }

    public function professor()
    {
        return $this->hasOne('tenda\Professor', 'id');
    }

    public function getAlunoByUser(User $user){
        
    }
}
