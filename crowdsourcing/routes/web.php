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

Route::get('/texttext/{questionId}', 'ChallengesController@textTextIndex');
Route::get('/textimage{questionId}', 'ChallengesController@textImageIndex');
Route::get('/imageimage{questionId}', 'ChallengesController@imageImageIndex');


Route::get('/signIn', function() {
    return view('signIn');
});

Route::get('/adminPanel', function() {
    return view('adminPanel');
});

Route::get('/accounts', 'AccountsController@index');
Route::get('/challenges', 'ChallengesController@index');
