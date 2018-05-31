<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon;

class AdminNewsController extends Controller
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
        $datas = DB::table('news')->orderBy('date', 'DESC')->get()->all();
        return view('/admin/news/newsHome', compact('datas'));
    }

    public function showNews($id){

        $news = DB::table('news')->find($id);
        return view('/admin/news/showNews', compact('news'));
    }

    public function newsForm()
    {
        return view('/admin/news/addNews');
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

        return redirect('/newsHome');
    }

    public function destroy($id){

        $news = \DB::table('news')->where('id', '=', $id);

         if (!is_null($news)) {
            $news->delete();
        }

        return redirect('/newsHome');
    }

    public function updateNews(Request $request, $id){

        $inputs['title'] = Input::get('title');

        $inputs['description'] = Input::get('description');

        DB::table('news')->where('id', '=', $id)->update($inputs);

        return redirect('/newsHome');
    }


}
