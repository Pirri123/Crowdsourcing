<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Option;
use App\QuestionOption;
use App\Question;

class ChallengesController extends Controller
{

    public function index(){
        $challenges = DB::table('questions')->where('QuestionType', "1")
            ->join('options', 'options.QuestionId', '=', 'questions.id')//->where('Correct', '0')
            ->join('question_options', 'question_options.QuestionId', '=', 'questions.id')
            ->get();
            //echo(sizeof($challenges));
            echo($challenges);
            return view('challenges.index', compact('challenges'));
    }
   public function texttext(){
    return view('texttextchallenge');
   }

   public function textimage(){
    return view('textimagechallenge');
   }

   public function imageimage(){
    return view('imageimagechallenge');
   }
}
