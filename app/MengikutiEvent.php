<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MengikutiEvent extends Model
{
    protected $table = 'mengikuti_event';
    public function user()
    {
      return $this->belongsTo('App\User');
    }
    public function event()
    {
      return $this->belongsTo('App\Event');
    }
}
