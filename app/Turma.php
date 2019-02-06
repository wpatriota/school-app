<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
	protected $table = 'turma';
	
    /*public function aluno()
    {
        return $this->hasMany('App\Aluno');
    }

    public function curso()
    {
        return $this->belongsTo('App\Curso');
    }*/
}
