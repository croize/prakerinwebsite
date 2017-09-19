<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    protected $table = 'question_option';

    public function Question()
    {
        return $this->belongsTo('App\Question');
    }
    public $timestamps = false;
}
