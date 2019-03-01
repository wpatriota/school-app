<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class FrequenciaTenda extends Model
{
    protected $table = 'frequencia_tenda';

    public function membro()
    {
        return $this->belongsTo('tenda\Membro', 'id_membro');
    }

    public function agenda()
    {
        return $this->belongsTo('tenda\Agenda', 'id_agenda');
    }
}
