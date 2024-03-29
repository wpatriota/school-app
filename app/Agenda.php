<?php

namespace tenda;

use Illuminate\Database\Eloquent\Model;
use MaddHatter\LaravelFullcalendar\Event;

class Agenda extends Model implements Event
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

    protected $dates = ['start', 'end'];

    /**
     * Get the event's id number
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get the event's title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Is it an all day event?
     *
     * @return bool
     */
    public function isAllDay()
    {
        return (bool)$this->all_day;
    }

    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }
}
