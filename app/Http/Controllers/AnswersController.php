<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect;


class AnswersController extends Controller
{
    public function check (Request $request){

      $user_answer = DB::table('levels')->find(3);

       $answer = Answers::all();

       // $answer =  User::where('answer','=','$answer');
        
        if(!$user_answer ===  $answer){
           // return response()->json(['success'=>false,'message'=>'Try again!']);
           return Redirect::to('/game2')
           ->with('true','yeahhh');
        }
      //  return response()->json(['success'=>true,'message'=>'perfect!']);

      return Redirect::to('/game2')
      ->with('error','answer Wrong');
      
        


        


    }
}
