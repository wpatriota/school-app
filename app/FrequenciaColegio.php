<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class FrequenciaColegio extends Model
{
    protected $table = 'frequencia_colegio';

    public function aluno()
    {
        return $this->belongsTo('tenda\Aluno', 'id_aluno');
    }

    public function agenda()
    {
        return $this->belongsTo('tenda\Agenda', 'id_agenda');
    }
}
