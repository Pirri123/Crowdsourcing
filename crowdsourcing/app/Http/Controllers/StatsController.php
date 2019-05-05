<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;
use App\UserResponse;

class StatsController extends Controller
{
    public function index(){
        $userResponses = UserResponse::all();
        $questions = Question::all();

        $totalAnswers = count($userResponses);
        $truePos = DB::table('user_responses')->where('RightAnswer', "Yes")
        ->where('GivenAnswer', 'Yes')
        ->get();

        $falsePos = DB::table('user_responses')->where('RightAnswer', 'No')
        ->where('GivenAnswer', 'Yes')
        ->get();

        $trueNeg = DB::table('user_responses')->where('RightAnswer', 'No')
        ->where('GivenAnswer', 'No')
        ->get();

        $falseNeg = DB::table('user_responses')->where('RightAnswer', 'Yes')
        ->where('GivenAnswer', 'No')
        ->get();

        dd(count($truePos), count($falsePos), count($trueNeg), count($falseNeg));

        return view('stats.index', compact('$userResponses'));

    }
}
