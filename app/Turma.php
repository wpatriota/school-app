<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;
use tenda\User;

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
