<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class TipoEvento extends Model
{
    protected $table = 'tipo_evento';

    public function agenda()
    {
        return $this->hasMany('tenda\Agenda');
    }
}
