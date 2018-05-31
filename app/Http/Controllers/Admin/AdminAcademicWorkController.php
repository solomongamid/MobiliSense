<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon;

class AdminAcademicWorkController extends Controller
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
        $datas = DB::table('academicWork')->orderBy('id', 'DESC')->get()->all();
        return view('/admin/academicWork/academicWorkHome', compact('datas'));
    }

    public function showAcademicWork($id){

        $academicWork = DB::table('academicWork')->find($id);
        return view('/admin/academicWork/showAcademicWork', compact('academicWork'));

    }

    public function academicWorkForm()
    {
        return view('/admin/academicWork/addAcademicWork');
    }

    public function store(Request $request){

        $inputs['title'] = Input::get('title');

        $inputs['author_name'] = Input::get('author_name');

        $inputs['description'] = Input::get('description');

        $inputs['date'] = Carbon\Carbon::now();

        if(Input::hasFile('academicWork_file')) {
            $file = Input::file('academicWork_file');
            $filePath = $request->file('academicWork_file')->store('files');
            $inputs['files'] = $filePath;
        }

        if(Input::hasFile('link')) {
            $file = Input::file('link');
            $filePath = $request->file('link')->store('link');
            $inputs['link'] = $filePath;
        }

        DB::table('academicWork')->insert($inputs);

        return redirect('/academicWorkHome');
    }

    public function destroy($id){

        $academicWork = \DB::table('academicWork')->where('id', '=', $id);

         if (!is_null($academicWork)) {
            $academicWork->delete();
        }


        return redirect('/academicWorkHome');

    }

    public function updateAcademicWork(Request $request, $id){

        $inputs['title'] = Input::get('title');

        $inputs['author_name'] = Input::get('author_name');
        
        $inputs['description'] = Input::get('description');

        $inputs['files'] = Input::get('academicWork_file');

        $inputs['date'] = Carbon\Carbon::now();

        DB::table('academicWork')->where('id', '=', $id)->update($inputs);

        return redirect('/academicWorkHome');
    }
}
