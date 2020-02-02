<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Redirect;
use URL;
use DB;
use App\Levels; 
use Session;



class level3answerController extends Controller
{
    public function check (Request $request){

        $answer = DB::table('levels')->where('id','3')->value('answer');
       
        $answer_3 = $_POST['answer_3'];
        
       
     
             if ($answer == $answer_3  ) {
                 
                session()->flash('message_true', 'Your answer is correct!' );

                 return Redirect::route('game3');
     
             } 
     
             session()->flash('message_wrong', 'Your answer is wrong! Try again!');

                 return Redirect::route('game3' );
     
      
      }
}