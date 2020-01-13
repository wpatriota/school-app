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
        return $this->belongsTo('tenda\Individuo', 'id_individuo');
    }

    public function turma()
    {
        return $this->hasMany('tenda\Turma', 'id');
    }
}
