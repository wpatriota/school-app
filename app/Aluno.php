<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
	protected $table = 'aluno';

    /*public function turma()
    {
        return $this->belongsTo('App\Turma');
    }*/

    /*public function individuo()
    {
        return $this->belongsTo('app\Individuo', 'id_individuo');
    }*/
}
