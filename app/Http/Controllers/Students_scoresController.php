<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Quiz;


class Students_scoresController extends Controller
{
    public function create(Request $request)
    {

        $count=0;
        $all =  count($request->all()) - 1;

        foreach ($request->all() as $key => $ans)
        {
//            print_r($ans);
            if ($ans == "True"){ echo"up" ; $count++;}
        }
        dd($count . ' out of '. $all );
        dd($request->all());
    }

}
