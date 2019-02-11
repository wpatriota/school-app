<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $table = 'membro';

    public function individuo()
    {
        return $this->belongsTo('tenda\Individuo', 'id_individuo');
    }
}
