<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    protected $table = 'question_option';
    protected $guarded = array();
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
    public $timestamps = false;
}
