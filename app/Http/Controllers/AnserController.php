<?php

namespace App\Http\Controllers;

use App\Anser;
use App\Question;
use App\StudentInfo;
use App\User;
use App\UserInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class AnserController extends Controller
{

   public function __construct()
   {
      $this->middleware('auth');
   }

   function Ans()
   {
      $question_ans =  Question::orderBy('id', 'asc')->get();

      return view('frontend.anser', [
         'question_ans' => $question_ans,
      ]);
   }

   function PostAns(Request $request)
   {

      for ($i = 1; $i < count($request->answer); $i++) {
         $answers[] = [
            'user_id' => Auth::user()->id,
            'answer' => $request->answer[$i],
            'question_id' => $request->question_id[$i],
            'created_at' => Carbon::now(),
         ];
      }
      Anser::insert($answers);
      return back()->with('success', 'Your Anser Added Successfuly');
   }

   function InduAns()
   {

      $answers = Anser::paginate(10);

      $q = Anser::with('question')->get();

      if($q){

         $t = Anser::where('answer')->get();
      }
      else{
        ' no';
      }
         
        
        


      if (User::where('user_status', 2)) {
         $info =  User::where('user_status', 2)->orderBy('name', 'asc')->get();
      } else {
         return "Not";
      }




      return view('backend.question.test-ans', [
         'answers' => $answers,
         'info' => $info,
         't' => $t
      ]);
   }


   //================================= ALL STUENTS RESULT ARE HERE  =======================

   public function UserResult(){

      if (User::where('user_status', 2)) {
         $students =  User::where('user_status', 2)->orderBy('name', 'asc')->get();
      } else {
         return "Not";
      }
   


      return view('backend.result.view_student_result', compact('students'));
   }

   //========================= STUDENTS IDUVIDUAL RESULT ARE HERE ==================

   public function ViewDetailsRe(){

      return "ok";
     // return view('backend.result.view_details');
   }
   
}
