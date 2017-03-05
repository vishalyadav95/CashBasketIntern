<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;                       // to use the Question class

use Validator;                          // to use the Validator functions to validate the user input

use App\Http\Requests;                  // to use the request function

use Illuminate\Support\Facades\Auth;    // to use predefined auth process

use App\Http\Controllers\Controller;    // to use the Controller class

use DB;                                 // to acess to the database

use App\Http\Controllers\View;          // to acess the views functions

use Hash;                               // to access the hashing functions


class QuestionController extends Controller
{
    //Contains the Controller for the questions and answers

    // to list all active questions date("H:i:s")
    public function QuestionList(Request $dump,$tour,$year)
    {
      // get the questions based on the tournments
      $Questions = DB::table('questions')
            ->join('matches', 'questions.match_id', '=', 'matches.id')
            ->join('category','matches.category_id', '=', 'category.id')
            ->select('questions.*','matches.*','category.*')
            ->whereDate('matches.match_date', date("Y-m-d"))
            ->where('matches.match_time','>',date("H:i:s"))
            ->where('category.tournment','=',$tour)
            ->where('category.year','=',$year)
            ->get();

      //var_dump(date("Y-m-d H:i:s"));
      //var_dump($Questions);
      //die();

      return view('questions',[
            'Questions' => $Questions,
          ]);
    }

    public function DisplayQuestion(Request $dump,$number)
    {
      $Questions = DB::table('questions')
            ->join('matches', 'questions.match_id', '=', 'matches.id')
            ->join('category','matches.category_id','=','category.id')
            ->select('questions.*','matches.*','category.*')
            ->where('questions.id','=',$number)
            ->get();

      return view('SingleQuestion',[
              'Question' => $Questions['0'],
              'Link' => "/question"."/".$number,
      ]);
    }
}
