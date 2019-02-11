<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class Individuo extends Model
{
	protected $table = 'individuo';

    public function aluno()
    {
        return $this->belongsTo('tenda\Aluno');
    }

    public function membro()
    {
        return $this->belongsTo('tenda\Membro');
    }

    public function turma()
    {
        return $this->hasMany('tenda\Turma');
    }
}
