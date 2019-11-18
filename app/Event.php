<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Event extends Model
{
    protected $guarded = [];

    public function getFechaAttribute($date)
    {
        return new Date($date);
    }
}
