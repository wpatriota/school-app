<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $table = 'estoque';

    public function tipoItem()
    {
        return $this->belongsTo('tenda\TipoItem', 'id_tipo_item');
    }
}
