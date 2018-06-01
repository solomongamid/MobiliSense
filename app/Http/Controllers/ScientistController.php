<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

class ScientistController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function communication()
    {
  		  $communication = DB::table('communication')->orderBy('date', 'DESC')->get();
        return view('/scientist/communication', compact('communication'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function academicWork()
    {
  		  $academicWork = DB::table('academicWork')->orderBy('date', 'DESC')->get();
        return view('/scientist/academicWork', compact('academicWork'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function principleResults()
    {
  		  $principleResults = DB::table('principleResults')->orderBy('date', 'DESC')->get();
        return view('/scientist/principleResults', compact('principleResults'));
    }

}
