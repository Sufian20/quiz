<?php

namespace App\Http\Controllers;

use App\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QueController extends Controller
{
    
    function AddQue(){

        return view('backend.question.add-que');
    }

    function PostQue(Request $request){
        
      Question::insert([
        'question' => $request->question,
        'option_a' => $request->option_a,
        'option_b' => $request->option_b,
        'option_c' => $request->option_c,
        'option_d' => $request->option_d,
        'Ans' => $request->Ans,
        'created_at' =>Carbon::now()

      ]);
      return back()->with('success', 'Question Added Successfuly');
    }

    function ViewtQue(){

       $questions = Question::paginate(10);
        return view('backend.question.view_que', compact('questions'));
    }

    function DeleteQue($id){
      Question::findOrfail($id)->delete();
      return back()->with('success', 'Question Deleted Successfuly');
    }

    function EditQue($id){
   
     $question = Question::findOrfail($id);
      return view('backend.question.edit-que', compact('question'));
    }

    function UpdatetQue(Request $request){
      
      Question::findOrfail($request->que_id)->update([
        'question' => $request->question,
        'option_a' => $request->option_a,
        'option_b' => $request->option_b,
        'option_c' => $request->option_c,
        'option_d' => $request->option_d,
        'Ans' => $request->Ans,
        
      
      ]);

      return back()->with('success', 'Question Upadated Successfuly');
    }

}
