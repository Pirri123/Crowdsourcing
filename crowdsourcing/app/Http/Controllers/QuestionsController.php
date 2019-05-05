<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionsController extends Controller
{
    public function index(){
        $questions = Question::all();
        return view('questions.index', compact('questions'));
    }
    public function create(){
        return view('questions.create');
    }

    public function store(){
        $this->validate(request(), [
            'QuestionType' => 'required',
            'QuestionText' => 'required',
            'Answer' => 'required',
            'ImgLocation' => 'required'
        ]);

        Question::create([
            'QuestionType' => request('QuestionType'),
            'QuestionText' => request('QuestionText'),
            'Answer' => request('Answer'),
            'ImgLocation' => request('ImgLocation')
        ]);

        return redirect('/questions');

    }

    public function edit(Question $question){
        return view ('questions.edit', compact('question'));
    }

    public function update(Question $question){
        $this->validate(request(), [
            'QuestionType' => 'required',
            'QuestionText' => 'required',
            'Answer' => 'required',
            'ImgLocation' => 'required'
        ]);

        
            $question->QuestionType = request('QuestionType');
            $question->QuestionText = request('QuestionText');
            $question->Answer = request('Answer');
            $question->ImgLocation = request('ImgLocation');
            $question->save();
        

        return redirect('/questions');
    }

    public function delete(Question $question){
        $question->delete();
        return redirect('/questions');
    }
}
