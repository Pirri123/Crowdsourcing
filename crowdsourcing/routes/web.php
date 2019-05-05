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

Route::get('/texttext/{questionId}', 'ChallengesController@textTextIndex')->middleware('auth');
Route::get('/textimage/{questionId}', 'ChallengesController@textImageIndex')->middleware('auth');
Route::get('/imageimage/{questionId}', 'ChallengesController@imageImageIndex')->middleware('auth');
Route::post('/texttext', 'ChallengesController@storeTextText')->middleware('auth');
Route::post('/textimage', 'ChallengesController@storeTextImage')->middleware('auth');
Route::post('/imageimage', 'ChallengesController@storeImageImage')->middleware('auth');

Route::get('/questions/create', 'QuestionsController@create')->middleware('auth');
Route::post('/questions', 'QuestionsController@store')->middleware('auth');
Route::get('/questions', 'QuestionsController@index')->middleware('auth');
Route::get('/questions/edit/{question}', 'QuestionsController@edit')->middleware('auth');
Route::patch('/questions/edit/{question}', 'QuestionsController@update')->middleware('auth');
Route::get('/questions/delete/{question}', 'QuestionsController@delete')->middleware('auth');

/*
Route::get('/options/create', 'OptionsController@create')->middleware('auth');
Route::post('/options', 'OptionsController@store')->middleware('auth');
Route::get('/options', 'OptionsController@index')->middleware('auth');
Route::get('/options/edit/{option}', 'OptionsController@edit')->middleware('auth');
Route::post('/options/edit/{option}', 'OptionsController@update')->middleware('auth');
Route::get('/options/delete/{option}', 'OptionsController@delete')->middleware('auth');*/



/*
Route::get('/signIn', function() {
    return view('signIn');
});*/

Route::get('/adminPanel', function() {
    return view('adminPanel');
})->middleware('auth');

Route::get('/stats', 'StatsController@index')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
