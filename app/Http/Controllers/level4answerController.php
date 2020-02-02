<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Redirect;
use URL;
use DB;
use App\Levels; 
use Session;



class level4answerController extends Controller
{
    public function check (Request $request){

        $answer = DB::table('levels')->where('id','4')->value('answer');
       
        $answer_4 = $_POST['answer_4'];
        
       
     
             if ($answer == $answer_4  ) {
                 
                session()->flash('message_true', 'Your answer is correct!' );

                 return Redirect::route('game4');
     
             } 
     
             session()->flash('message_wrong', 'Your answer is wrong! Try again!');


                 return Redirect::route('game4' );
     
      
      }
}