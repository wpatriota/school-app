<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agenda';

    public function tipoEvento()
    {
        return $this->belongsTo('tenda\tipoEvento', 'id_evento');
    }
}
