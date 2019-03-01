<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class GrupoLimpeza extends Model
{
    protected $table = 'grupo_limpeza';

    public function individuo()
    {
        return $this->belongsTo('tenda\Individuo', 'id_individuo');
    }
}
