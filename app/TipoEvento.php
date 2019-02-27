<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class TipoEvento extends Model
{
    protected $table = 'tipo_evento';

    protected $fillable =   [
        'id',
        'descricao'
    ];

    public function agenda()
    {
        return $this->hasMany('tenda\Agenda', 'id');
    }
}
