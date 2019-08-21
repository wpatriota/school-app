<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agenda';

    protected $fillable =   [
    	'id',
        'id_tipo_evento',
        'nome_evento',
        'data',
        'horario',
        'evento_publico'
    ];

    public function tipoEvento()
    {
        return $this->hasOne('tenda\TipoEvento', 'id');
    }

    public function frequenciaColegio()
    {
        return $this->hasMany('tenda\FrequenciaColegio', 'id');
    }
}
