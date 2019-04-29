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
            ->get();

            if ($id < 0){
                $id = 0;
            }
            if ($id % 2 == 1){
                $id = $id - 1;
            }
            return view('challenges.index', compact('challenges', 'id'));
    }

    public function textImageIndex($id){
        $challenges = DB::table('questions')->where('QuestionType', "2")
            ->join('options', 'options.QuestionId', '=', 'questions.id')
            ->get();

            if ($id < 0){
                $id = 0;
            }
            if ($id % 2 == 1){
                $id = $id - 1;
            }

            return view('challenges.index', compact('challenges', 'id'));
    }

    public function imageImageIndex($id){
        $challenges = DB::table('questions')->where('QuestionType', "3")
            ->join('options', 'options.QuestionId', '=', 'questions.id')
            ->get();

            if ($id < 0){
                $id = 0;
            }
            if ($id % 2 == 1){
                $id = $id - 1;
            }
            return view('challenges.index', compact('challenges', 'id'));
    }

    public function create(){
        return view('challenges.create');
    }

    public function store(){
        return view('challenges.store');
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
