<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon;

class AdminFaqController extends Controller
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
        $datas = DB::table('faq')->orderBy('position', 'ASC')->get()->all();
        return view('/admin/faq/faqHome', compact('datas'));
    }

    public function showFaq($id){

        $faq = DB::table('faq')->find($id);
        return view('/admin/faq/showFaq', compact('faq'));

    }

    public function faqForm()
    {
        return view('/admin/faq/addFaq');
    }

    public function store(Request $request){

        $inputs['title'] = Input::get('title');

        $inputs['description'] = Input::get('description');

        $inputs['position'] = Input::get('position');

        DB::table('faq')->insert($inputs);

        return redirect('/faqHome');
    }

    public function destroy($id){

        $faq = \DB::table('faq')->where('id', '=', $id);

         if (!is_null($faq)) {
            $faq->delete();
        }


        return redirect('/faqHome');

    }

    public function updateFaq(Request $request, $id){

        $inputs['title'] = Input::get('title');

        $inputs['description'] = Input::get('description');

        $inputs['position'] = Input::get('position');

        DB::table('faq')->where('id', '=', $id)->update($inputs);

        return redirect('/faqHome');
    }


}
