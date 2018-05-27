<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Quiz;
use App\User;
use Illuminate\Http\Request;

class QuizzesController extends Controller
{

    public function index()
    {

       $quiz =  Quiz::first();
        return view('quiz', compact('quiz'));
    }


}
