<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon;

class AdminDemenagementController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
      {
          $demenagement = DB::table('demenagement')->orderBy('name', 'ASC')->get()->all();
          return view('/admin/demenagementAdmin', compact('demenagement'));
      }

    public function destroy($id){

        $demenagement = DB::table('demenagement')->where('id', '=', $id);

         if (!is_null($demenagement)) {
            $demenagement->delete();
            session()->flash('message', 'Le déménagemnt a bien été suprimé');
        }

        return redirect('/demenagementAdmin');

    }

}
