<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Studentcontroller extends Controller
{
   /* public function index(){
        $students = DB::select('select * from students);
        return view('sections.sectionA',['students'=>$students]);
    }*/
    public function index(){
        $students = DB::select('select * from students where section="A"');
        return view('sections.sectionA',['students'=>$students]);
}
public function indexx(){
    $students = DB::select('select * from students where section="D"');
    return view('sections.sectionD',['students'=>$students]);
}
public function indexxx(){
    $students = DB::select('select * from students where section="K"');
    return view('sections.sectionK',['students'=>$students]);
}
}
