<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon;

class AdminCommunicationsController extends Controller
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
        $datas = DB::table('communication')->orderBy('id', 'DESC')->get()->all();
        return view('/admin/communication/communicationHome', compact('datas'));
    }

    public function showCommunication($id){

        $communication = DB::table('communication')->find($id);
        return view('/admin/communication/showCommunication', compact('communication'));

    }

    public function communicationForm()
    {
        return view('/admin/communication/addCommunication');
    }

    public function store(Request $request){

        $inputs['title'] = Input::get('title');

        $inputs['description'] = Input::get('description');

        $inputs['date'] = Carbon\Carbon::now();

        if(Input::hasFile('communication_file')) {
            $file = Input::file('communication_file');
            $filePath = $request->file('communication_file')->store('files');
            $inputs['files'] = $filePath;
        }

        if(Input::hasFile('link')) {
            $file = Input::file('link');
            $filePath = $request->file('link')->store('link');
            $inputs['link'] = $filePath;
        }

        DB::table('communication')->insert($inputs);

        return redirect('/communicationHome');
    }

    public function destroy($id){

        $communication = \DB::table('communication')->where('id', '=', $id);

         if (!is_null($communication)) {
            $communication->delete();
        }


        return redirect('/communicationHome');

    }

    public function updateCommunication(Request $request, $id){

        $inputs['title'] = Input::get('title');

        $inputs['description'] = Input::get('description');

        $inputs['files'] = Input::get('communication_file');

        $inputs['date'] = Carbon\Carbon::now();

        DB::table('communication')->where('id', '=', $id)->update($inputs);

        return redirect('/communicationHome');
    }
}
