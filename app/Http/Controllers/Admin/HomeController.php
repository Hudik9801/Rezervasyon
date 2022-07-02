<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rezervation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
 public function index()
 {
    return view ('admin.index');

 }
 public function contact()
 {
     return view ('admin.contact');

 }
    public function tableopen()
    {
        return view ('admin.tableopen');

    }
    public function tableopenadd(Request $request)
    {
        DB::table('table_opens')->insert([
            'date'=>$request->input('date'),
            'time1'=>$request->input('time1'),
            'time2'=>$request->input('time2'),
            'person'=>$request->input('person'),
            'table_no'=>$request->input('table_no'),
        ]);
        return view('admin.tableopen');

    }

    public function tableclose(Request $request)
    {

        return view ('admin.tableclose');



    }
    public function tablecloseadd(Request $request)
    {


        return view ('admin.kapatma');


    }
    public function datatable()
    {
      $datalist = DB::select('select * from rezervations');
        return view ('admin.datatables',['datalist'=>$datalist]);

    }
    public function calendar()
    {
        return view ('admin.calendar');

    }

}
