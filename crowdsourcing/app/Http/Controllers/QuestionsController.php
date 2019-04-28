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
        $question = new Question();

        $question->QuestionType = request('QuestionType');
        $question->QuestionText = request('QuestionText');
        $question->save();

        return redirect('/');

    }
}
