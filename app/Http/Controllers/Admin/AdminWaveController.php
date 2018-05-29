<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon;

class AdminWaveController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin')->except('logout');
    }

    // Gestion des vagues
    public function index()
    {
        return view('/admin/wave');
    }

    public function wave1(Request $request){

        $inputs['value'] = 1;

        $inputs['date'] = Carbon\Carbon::today();

        DB::table('wave')->where('id', '=', 1)->update($inputs);

        return redirect('/adminHome');
    }

    public function betweenwave(Request $request){

        $inputs['value'] = 2;

        $inputs['date'] = Carbon\Carbon::today();

        DB::table('wave')->where('id', '=', 1)->update($inputs);

        return redirect('/adminHome');
    }

    public function wave2(Request $request){

        $inputs['value'] = 3;

        $inputs['date'] = Carbon\Carbon::today();

        DB::table('wave')->where('id', '=', 1)->update($inputs);

        return redirect('/adminHome');
    }

    public function stopwave(Request $request){

        $inputs['value'] = 0;

        $inputs['date'] = Carbon\Carbon::today();

        DB::table('wave')->where('id', '=', 1)->update($inputs);

        return redirect('/adminHome');
    }
    // Fin de gestion des vagues

}
