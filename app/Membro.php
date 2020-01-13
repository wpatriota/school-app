<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;
use tenda\Individuo;

class Membro extends Model
{
    protected $table = 'membro';

    protected $fillable =	[
    	'id',
    	'id_individuo',
    	'data_inicio',
        'data_saida'
    ];

    public function individuo()
    {
        return $this->belongsTo('tenda\Individuo', 'id_individuo');
    }
}
