<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class Individuo extends Model
{
	protected $table = 'individuo';

    public function aluno()
    {
        return $this->hasMany('App\Aluno');
    }
}
