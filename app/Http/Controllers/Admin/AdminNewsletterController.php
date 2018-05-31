<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon;

class AdminNewsletterController extends Controller
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
          $newsletter = DB::table('newsletter')->orderBy('id', 'DESC')->get()->all();
          return view('/admin/newsletterAdmin', compact('newsletter'));
      }

    public function destroy($id){

        $newsletter = DB::table('newsletter')->where('id', '=', $id);

         if (!is_null($newsletter)) {
            $newsletter->delete();
            session()->flash('message', 'L\'utilisateur a bien été suprimé');
        }

        return redirect('/newsletterAdmin');

    }

}
