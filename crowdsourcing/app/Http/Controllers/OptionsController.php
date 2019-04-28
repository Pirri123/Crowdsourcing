<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Option;
use App\QuestionOption;
use App\Question;

class OptionsController extends Controller
{
    public function index(){
        $options = Option::all();
        return view('options.index', compact('options'));

    }
    public function create(){
        $questions = Question::all();
        return view('options.create', compact('questions'));
    }

    public function edit(Option $option){
        $options = Option::all();
        $questions = Question::all();
        return view('options.edit', compact('option', 'questions'));
    }

    public function update(Option $option){
        $this->validate(request(), [
            'ImgLocation' => 'required',
            'Correct' => 'required'
        ]);

        $option->Correct = request('Correct');
        $option->ImgLocation = request('ImgLocation');
        $option->save();

        return redirect('/options');


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

        return redirect('/options');
    }

    public function delete(Option $option){
        $option->delete();
        return redirect('/options');
    }
}
