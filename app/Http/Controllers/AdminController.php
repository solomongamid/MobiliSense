<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon;

class AdminController extends Controller
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
        $data = DB::table('news')->orderBy('id', 'DESC')->get()->all();
        $users = DB::table('users')->orderBy('id', 'DESC')->get()->all();
        return view('adminHome', compact('data', 'users'));
    }

    public function indexNews()
    {
        $datas = DB::table('news')->orderBy('id', 'DESC')->get()->all();
        return view('news', compact('datas'));
    }

    public function showNews($id){

        $news = DB::table('news')->find($id);
        return view('show', compact('news'));

    }

    public function newsForm()
    {
        return view('addNews');
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

        DB::table('news')->insert($inputs);

        return redirect('/adminHome');
    }
    // Gestion des vagues
    public function waveForm()
    {
        return view('wave');
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


    public function destroy($id){

        $news = \DB::table('news')->where('id', '=', $id);

         if (!is_null($news)) {
            $news->delete();
        }


        return redirect('/adminHome');

    }

    public function updateNews(Request $request, $id){

        //$news = \DB::table('news')->where('id', '=', $id);
        $inputs['title'] = Input::get('title');

        $inputs['description'] = Input::get('description');

        $inputs['date'] = Carbon\Carbon::now();

        DB::table('news')->where('id', '=', $id)->update($inputs);

        return redirect('/newsHome');
    }


}
