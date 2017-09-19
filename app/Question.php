<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question';
    protected $guarded = array();

    public function option()
    {
        return $this->hasMany('App\QuestionOption','question_id');
    }
    public $timestamps = false;
}
