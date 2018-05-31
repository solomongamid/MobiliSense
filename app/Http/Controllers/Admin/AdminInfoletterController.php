<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon;

class AdminInfoletterController extends Controller
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

    public function index()
    {
        $datas = DB::table('information_letter')->orderBy('id', 'DESC')->get()->all();
        return view('/admin/infoletter/infoletterHome', compact('datas'));
    }

    public function showinfoletter($id){

        $infoletter = DB::table('information_letter')->find($id);
        return view('/admin/infoletter/showInfoletter', compact('infoletter'));

    }

    public function infoletterForm()
    {
        return view('/admin/infoletter/addInfoletter');
    }

    public function store(Request $request){

        $inputs['title'] = Input::get('title');

        $inputs['description'] = Input::get('description');

        $inputs['date'] = Carbon\Carbon::now();

        if(Input::hasFile('news_file')) {
            $file = Input::file('news_file');
            //$file->move(public_path(). '/storage', $file->getClientOriginalName())->save();
            $filePath = $request->file('news_file')->store('files');
            $inputs['files'] = $filePath;
        }

        DB::table('information_letter')->insert($inputs);

        return redirect('/infoletterHome');
    }

    public function destroy($id){

        $infoletter = \DB::table('information_letter')->where('id', '=', $id);

         if (!is_null($infoletter)) {
            $infoletter->delete();
        }


        return redirect('/infoletterHome');

    }

    public function updateInfoletter(Request $request, $id){

        $inputs['title'] = Input::get('title');

        $inputs['description'] = Input::get('description');

        $inputs['files'] = Input::get('files');

        $inputs['date'] = Carbon\Carbon::now();

        DB::table('information_letter')->where('id', '=', $id)->update($inputs);

        return redirect('/infoletterHome');
    }


}
