<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';
    public function mengikutievent()
    {
      return $this->hasMany('App\MengikutiEvent');
    }
}
