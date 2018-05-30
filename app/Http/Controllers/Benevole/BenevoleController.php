<?php

namespace App\Http\Controllers\Benevole;

use App\Http\Controllers\Controller;
use DB;
use Carbon;
use Illuminate\Http\Request;

class BenevoleController extends Controller
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
        $resultat = DB::table('wave')->limit(1)->value('value');

        if ($resultat == 1) {
          $datenow = Carbon\Carbon::today();

          $datesave = DB::table('wave')->limit(1)->value('date');

          if ($datenow == $datesave)
          {
            return view('/benevole/benevolev1/benevolev1d0');
          }
          elseif ($datesave == $datenow->subDay()) {
            return view('/benevole/benevolev1/benevolev1d1');
          }
          elseif ($datesave == $datenow->subDay(1)) {
            return view('/benevole/benevolev1/benevolev1d2');
          }
          else {
            return view('/benevole/benevolev1/benevolev1d3');
          }
       }
       elseif ($resultat == 2) {
         return view('/benevole/benevolequestio');
       }
       elseif ($resultat == 3) {
         return view('/benevole/benevolesecond');
       }
       else {
         return view('/benevole/waitbenevole');
       }

    }
}
