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
          elseif ($datesave == $datenow->subDay()) {
            return view('/benevole/benevolev1/benevolev1d2');
          }
          elseif ($datesave == $datenow->subDay()) {
              return view('/benevole/benevolev1/benevolev1d3');
          }
          elseif ($datesave == $datenow->subDay()) {
            return view('/benevole/benevolev1/benevolev1d4');
          }
          elseif ($datesave == $datenow->subDay()) {
            return view('/benevole/benevolev1/benevolev1d5');
          }
          elseif ($datesave == $datenow->subDay()) {
            return view('/benevole/benevolev1/benevolev1d6');
          }
          elseif ($datesave == $datenow->subDay()) {
            return view('/benevole/benevolev1/benevolev1d7');
          }
          else {
            return view('/benevole/benevolev1/thx');
          }
       }
       elseif ($resultat == 2) {
         return view('/benevole/benevolequestio');
       }
       elseif ($resultat == 3) {
         $datenow = Carbon\Carbon::today();

         $datesave = DB::table('wave')->limit(1)->value('date');

         if ($datenow == $datesave)
         {
           return view('/benevole/benevolev2/benevolev2d0');
         }
         elseif ($datesave == $datenow->subDay()) {
           return view('/benevole/benevolev2/benevolev2d1');
         }
         elseif ($datesave == $datenow->subDay()) {
           return view('/benevole/benevolev2/benevolev2d2');
         }
         elseif ($datesave == $datenow->subDay()) {
             return view('/benevole/benevolev2/benevolev2d3');
         }
         elseif ($datesave == $datenow->subDay()) {
           return view('/benevole/benevolev2/benevolev2d4');
         }
         elseif ($datesave == $datenow->subDay()) {
           return view('/benevole/benevolev2/benevolev2d5');
         }
         elseif ($datesave == $datenow->subDay()) {
           return view('/benevole/benevolev2/benevolev2d6');
         }
         elseif ($datesave == $datenow->subDay()) {
           return view('/benevole/benevolev2/benevolev2d7');
         }
         else {
           return view('/benevole/benevolev2/thxv2');
         }
       }
       else {
         return view('/benevole/waitbenevole');
       }

    }
}
