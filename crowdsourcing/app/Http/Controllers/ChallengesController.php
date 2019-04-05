<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChallengesController extends Controller
{
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
