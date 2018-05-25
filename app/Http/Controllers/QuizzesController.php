<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

class QuizzesController extends Controller
{




    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
