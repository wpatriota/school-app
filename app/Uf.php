<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class Uf extends Model
{
    protected $table = 'uf';

    protected $fillable =	[
    	'id',
    	'nome',
    	'sigla'
    ];

    public function individuo()
    {
        return $this->belongsTo('tenda\Individuo', 'id_individuo');
    }
}
