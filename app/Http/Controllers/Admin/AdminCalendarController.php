<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon;

class AdminCalendarController extends Controller
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
        $datas = DB::table('calendar')->orderBy('date', 'DESC')->get()->all();
        return view('/admin/calendar/calendarHome', compact('datas'));
    }

    public function showCalendar($id){

        $calendar = DB::table('calendar')->find($id);
        return view('/admin/calendar/showCalendar', compact('calendar'));

    }

    public function calendarForm()
    {
        return view('/admin/calendar/addCalendar');
    }

    public function store(Request $request){

        $inputs['title'] = Input::get('title');

        $inputs['description'] = Input::get('description');

        $inputs['date'] = Carbon\Carbon::now();

        if(Input::hasFile('calendar_file')) {
            $file = Input::file('calendar_file');
            $filePath = $request->file('calendar_file')->store('files');
            $inputs['files'] = $filePath;
        }

        if(Input::hasFile('link')) {
            $file = Input::file('link');
            $filePath = $request->file('link')->store('link');
            $inputs['link'] = $filePath;
        }

        DB::table('calendar')->insert($inputs);

        return redirect('/calendarHome');
    }

    public function destroy($id){

        $calendar = \DB::table('calendar')->where('id', '=', $id);

         if (!is_null($calendar)) {
            $calendar->delete();
        }


        return redirect('/calendarHome');

    }

    public function updateCalendar(Request $request, $id){

        $inputs['title'] = Input::get('title');

        $inputs['description'] = Input::get('description');

        $inputs['link'] = Input::get('link');

        DB::table('calendar')->where('id', '=', $id)->update($inputs);

        return redirect('/calendarHome');
    }

}
