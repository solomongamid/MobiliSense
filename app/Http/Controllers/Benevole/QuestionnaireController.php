<?php

namespace App\Http\Controllers\Benevole;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth')->except('logout');
     }

    public function index()
    {
         return view('/benevole/questionnaire');
    }
}
