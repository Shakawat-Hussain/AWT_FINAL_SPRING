<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\student;
use Validator;

class StudentApi extends Controller
{
    function studentlist()
    {
return Student::all();
    }
    function findstudent($id=null)
    {
return $id?Student::find($id):Student::all();
    }
    function addstudent(Request $req)
    {
        $rules=array('Course_id'=>'required | numeric',
        'student_name'=>'required | regex:/^[A-Z a-z]+$/',
        'cgpa'=>'required | max:4',
        'course'=>'required |  regex:/^[A-Z a-z]+$/',
        'section'=>'required | max:2',
        'dept'=>'required | min:3 | max:4 | regex:/^[A-Z a-z]+$/'
        );
        $validator= Validator::make($req->all(),$rules);
        if($validator->fails())
        {
            return response()->json($validator->errors(),401);
        }else 
        {
        $s = new Student();
        $s->Course_id= $req->Course_id;
        $s->student_name= $req->student_name;
        $s->cgpa= $req->cgpa;
        $s->course= $req->course;
        $s->section= $req->section;
        $s->dept= $req->dept;
        $success=$s->save();
        if($success)
        {
            return "data inserted successfully";
        }
        else 
        {
            return "data not inserted ";
        }
    }
}
    function update(Request $req)
    {
        $s = Student::find($req->id);
        $s->student_name= $req->student_name;
        $s->course= $req->course;
        $s->section= $req->section;
        $s->dept= $req->dept;

        $result=$tr->save();
        if($result)
        {
            return ["Result"=>"Data updated"];
        }else 
        {
            return ["Result"=>"Not Updated"];
        }
    }
    function delete ($id)
    {
        $tr = Student::find($id);
        $deletion=$tr->delete();
        if($deletion)
        {
            return ["deletion"=>"Data deleted"];
        }else 
        {
            return ["deletion"=>"Not deleted"];
        }

    }


 
}
