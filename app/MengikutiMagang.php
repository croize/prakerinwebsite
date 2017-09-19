<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MengikutiMagang extends Model
{
    protected $table = 'mengikuti_magang';

    public function user()
   {
       return $this->belongsTo('App\User');
   }

}
