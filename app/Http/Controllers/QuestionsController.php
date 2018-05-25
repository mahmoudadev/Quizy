<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Quiz;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    //




    public function quizzes()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }


}
