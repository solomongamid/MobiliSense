<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon;

class AdminDossierController extends Controller
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
        $datas = DB::table('dossier')->orderBy('date', 'DESC')->get()->all();
        return view('/admin/dossier/dossierHome', compact('datas'));
    }

    public function showDossier($id){

        $dossier = DB::table('dossier')->find($id);
        return view('/admin/dossier/showDossier', compact('dossier'));

    }

    public function dossierForm()
    {
        return view('/admin/dossier/addDossier');
    }

    public function store(Request $request){

        $inputs['title'] = Input::get('title');

        $inputs['description'] = Input::get('description');

        $inputs['date'] = Carbon\Carbon::now();

        if(Input::hasFile('dossier_file')) {
            $file = Input::file('dossier_file');
            //$file->move(public_path(). '/storage', $file->getClientOriginalName())->save();
            $filePath = $request->file('dossier_file')->store('files');
            $inputs['files'] = $filePath;
        }

        DB::table('dossier')->insert($inputs);

        return redirect('/dossierHome');
    }

    public function destroy($id){

        $dossier = \DB::table('dossier')->where('id', '=', $id);

         if (!is_null($dossier)) {
            $dossier->delete();
        }

        return redirect('/dossierHome');

    }

    public function updateDossier(Request $request, $id){

        $inputs['title'] = Input::get('title');

        $inputs['description'] = Input::get('description');

        DB::table('dossier')->where('id', '=', $id)->update($inputs);

        return redirect('/dossierHome');
    }

}
