<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Request as DBRequest;

use Carbon;
use Storage;

class HomeController extends Controller
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
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('/contact');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function demenagement()
    {
        return view('/demenagement', ['send'=>'non']);
    }

    public function demenagementok(Request $request)
    {
      $inputs['name'] = Input::get('name');

      $inputs['firstname'] = Input::get('firstname');

      $inputs['email'] = Input::get('email');

      $inputs['adress'] = Input::get('adress');

      $inputs['postalcode'] = Input::get('postalcode');

      $inputs['city'] = Input::get('city');

      DB::table('demenagement')->insert($inputs);

      return view('/demenagement', ['send'=>'ok']);
    }
}
