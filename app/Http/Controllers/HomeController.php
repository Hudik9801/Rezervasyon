<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  public function index(Request $request)
  {

    return view('home.index');
  }
    public function rezervasion(Request $request)
    {
        DB::table('rezervations')->insert([
            'name'=>$request->input('name'),
            'phone'=>$request->input('phone'),
            'Email'=>$request->input('Email'),
            'r_date'=>$request->input('r_date'),
            'time_a'=>$request->input('time_a'),
            'time_b'=>$request->input('time_b'),
            'person'=>$request->input('person'),
            'note'=>$request->input('note'),
        ]);

        $datalist = DB::select('select * from table_closes');
        return view ('layouts.home',['datalist'=>$datalist]);

    }
}
