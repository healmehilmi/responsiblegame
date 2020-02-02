<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Redirect;
use URL;
use DB;
use App\Levels; 
use Session;



class level2answerController extends Controller
{
    public function check (Request $request){

        $answer = DB::table('levels')->where('id','2')->value('answer');
       
        $answer_2 = $_POST['answer_2'];
        
       
     
             if ($answer == $answer_2  ) {
                 
                session()->flash('message_true', 'Your answer is correct!' );
                 return Redirect::route('game2');

     
             } 
     
             session()->flash('message_wrong', 'Your answer is wrong! Try again!');

                 return Redirect::route('game2' );
     
      
      }
}