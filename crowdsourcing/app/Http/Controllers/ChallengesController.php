<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Option;
use App\QuestionOption;
use App\Question;

class ChallengesController extends Controller
{

    public function textTextIndex($id){
        $challenges = DB::table('questions')->where('QuestionType', "1")
            ->join('options', 'options.QuestionId', '=', 'questions.id')
            ->join('question_options', 'question_options.QuestionId', '=', 'questions.id')
            ->get();
            $questionIndex = array("First" => $id);
            //$questionIndex = array("First"=>"0", "Second"=>"1");
            //echo(sizeof($challenges));
            //echo($challenges);
            return view('challenges.index', compact('challenges', 'questionIndex'));
    }

    public function textImageIndex($id){
        $challenges = DB::table('questions')->where('QuestionType', "2")
            ->join('options', 'options.QuestionId', '=', 'questions.id')
            ->join('question_options', 'question_options.QuestionId', '=', 'questions.id')
            ->get();
            $questionIndex = array("First" => $id);
           
            //echo(sizeof($challenges));
            echo($challenges);
            return view('challenges.index', compact('challenges', 'questionIndex'));
    }

    public function imageImageIndex($id){
        $challenges = DB::table('questions')->where('QuestionType', "3")
            ->join('options', 'options.QuestionId', '=', 'questions.id')
            ->join('question_options', 'question_options.QuestionId', '=', 'questions.id')
            ->get();
            $questionIndex = array("First" => $id);
            //echo(sizeof($challenges));
            //echo($challenges);
            return view('challenges.index', compact('challenges', 'questionIndex'));
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
