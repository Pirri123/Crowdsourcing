<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Option;
use App\QuestionOption;
use App\Question;

class OptionsController extends Controller
{
    public function create(){
        $questions = Question::all();
        return view('options.create', compact('questions'));
    }

    public function store(){
        $option1 = new Option();
        $option2 = new Option();

        $option1->Correct = request('Correct1');
        $option1->ImgLocation = request('ImgLocation1');
        $option1->QuestionID = request('QuestionID');
        $option1->save();

        $option2->Correct = request('Correct2');
        $option2->ImgLocation = request('ImgLocation2');
        $option2->QuestionID = request('QuestionID');
        $option2->save();

        return redirect('/');
    }
}
