<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

class VolunteerController extends Controller
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
    public function index()
    {
        $information_letter = DB::table('information_letter')->orderBy('date', 'DESC')->get();
        $faq = DB::table('faq')->orderBy('position', 'ASC')->get();
        return view('/volunteerPage/volunteerPage', compact('information_letter','faq'));
    }
}
