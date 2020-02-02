<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Redirect;
use URL;
use DB;
use App\Levels; 
use Session;



class levelanswerController extends Controller
{
    public function check (Request $request){

        $answer = DB::table('levels')->where('id','1')->value('answer');
       
        $answer_1 = $_POST['answer_1'];
        
       
     
             if ($answer == $answer_1 ) {
                
                
                session()->flash('message_true', 'Your answer is correct!' );

                 return Redirect::route('game');

     
             } 
     

             session()->flash('message_wrong', 'Your answer is wrong! Try again!');
                 return Redirect::route('game' );
     
      
      }
}