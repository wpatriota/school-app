<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professor';

    protected $fillable =	[
    	'id',
    	'id_individuo',
    	'data_inicio',
        'data_termino'
    ];

    public function individuo()
    {
        return $this->hasOne('tenda\Individuo', 'id');
    }

    public function turma()
    {
        return $this->belongsTo('tenda\Turma', 'id_professor');
    }
}
