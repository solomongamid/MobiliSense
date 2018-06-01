<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon;

class AdminPrincipleResultsController extends Controller
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
        $datas = DB::table('principleResults')->orderBy('id', 'DESC')->get()->all();
        return view('/admin/principleResults/principleResultsHome', compact('datas'));
    }

    public function showPrincipleResult($id){

        $principleResults = DB::table('principleResults')->find($id);
        return view('/admin/principleResults/showPrincipleResults', compact('principleResults'));

    }


    public function principleResultsForm()
    {
        return view('/admin/principleResults/addPrincipleResults');
    }

    public function store(Request $request){

        $inputs['title'] = Input::get('title');

        $inputs['description'] = Input::get('description');

        $inputs['date'] = Carbon\Carbon::now();

        if(Input::hasFile('principleResults_file')) {
            $file = Input::file('principleResults_file');
            $filePath = $request->file('principleResults_file')->store('files');
            $inputs['files'] = $filePath;
        }

        if(Input::hasFile('link')) {
            $file = Input::file('link');
            $filePath = $request->file('link')->store('link');
            $inputs['link'] = $filePath;
        }

        DB::table('principleResults')->insert($inputs);

        return redirect('/principleResultsHome');
    }

    public function destroy($id){

        $principleResults = \DB::table('principleResults')->where('id', '=', $id);

         if (!is_null($principleResults)) {
            $principleResults->delete();
        }


        return redirect('/principleResultsHome');

    }

    public function updatePrincipleResults(Request $request, $id){

        $inputs['title'] = Input::get('title');
        
        $inputs['description'] = Input::get('description');

        $inputs['files'] = Input::get('principleResults_file');

        $inputs['date'] = Carbon\Carbon::now();

        DB::table('principleResults')->where('id', '=', $id)->update($inputs);

        return redirect('/principleResultsHome');
    }
}
