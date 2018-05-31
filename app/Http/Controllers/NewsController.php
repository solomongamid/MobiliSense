<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

class NewsController extends Controller
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
  		  $news = DB::table('news')->orderBy('date', 'DESC')->get();
        return view('/actu/actu', compact('news'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function newsletter()
    {
        return view('/actu/newsletter', ['send'=>'non']);
    }

    public function newsletterok(Request $request)
    {
      $inputs['firstname'] = Input::get('firstname');

      $inputs['lastname'] = Input::get('lastname');

      $inputs['email'] = Input::get('email');

      $inputs['job'] = Input::get('job');

      DB::table('newsletter')->insert($inputs);

      return view('/actu/newsletter', ['send'=>'ok']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dossier()
    {
  		  $dossiers = DB::table('dossier')->orderBy('date', 'DESC')->get();
        return view('/actu/dossier', compact('dossiers'));
    }


}
