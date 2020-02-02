<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Redirect;
use URL;
use DB;
use App\Levels; 
use Session;



class AnswersController extends Controller
{
    public function check (Request $request){


     
      $user_answer = $request->all();
     // $answer = Answer::findOrFail($id);
     $answer = Levels::get('id');
  
          if ( $answer == $request->all()) {
              Session::flash('alert-success', 'truee');
              return Redirect::to('/game2' );
  
          } else {
  
            
  
              Session::flash('alert-error', 'flase');
  
              return Redirect::to('/game2' );
  
          }
  
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     




    }
}