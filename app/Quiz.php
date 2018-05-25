<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Quiz
 *
 * @mixin \Eloquent
 */
class Quiz extends Model
{
    protected $fillable=['title'];



    public function question()
    {
        return $this->hasMany(Question::class);
    }


}
