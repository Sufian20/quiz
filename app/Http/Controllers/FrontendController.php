<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function StudentInfo(){
        $question_ans =  Question::orderBy('id')->get();
            
        return view('frontend.stuedent_info',[
           'question_ans' => $question_ans
        ]);
        
       }
}
