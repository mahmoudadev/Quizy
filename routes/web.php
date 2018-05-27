<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('quizzes/{user_id}/{quiz_id}', 'QuizzesController@index')->name('showQuiz');
Route::post('students_scores/{quiz_id}/{user_id} ', 'Students_scoresController@create')->name('storeStudentScore');
Route::get('quiz/send/{id}', 'QuizzesController@sendToUsers')->name('sendQuiz');