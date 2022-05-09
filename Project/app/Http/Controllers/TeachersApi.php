<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\teacher;
use Validator;

class TeachersApi extends Controller
{
    //
     function Allteachers()
    {
return Teacher::all();
    }
    function searchteacher($id=null)
    {
return $id?Teacher::find($id):Teacher::all();
    }
    function addteacher(Request $req)
    {
        $tr = new Teacher();
        $tr->first_name= $req->first_name;
        $tr->last_name= $req->last_name;
        $tr->username= $req->username;
        $tr->mobileno= $req->mobileno;
        $tr->email= $req->email;
        $tr->password= $req->password;
        $tr->gender= $req->gender;
        $tr->department= $req->department;
        $tr->appearance= $req->appearance;
        $tr->created_at= $req->created_at;
        $tr->updated_at= $req->updated_at;


        $tr->save();
return ["Result"=>"Record saved"];
    }
    function update(Request $req)
    {
        $tr = Teacher::find($req->id);
        $tr->first_name= $req->first_name;
        $tr->username= $req->username;
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
        $tr = Teacher::find($id);
        $deletion=$tr->delete();
        if($deletion)
        {
            return ["deletion"=>"Data deleted"];
        }else 
        {
            return ["deletion"=>"Not deleted"];
        }

    }


    function apivalidate (Request $req)
    {
$rules=array('first_name'=>'required | regex:/^[A-Z a-z]+$/',
'last_name'=>'required | regex:/^[A-Z a-z]+$/',
'username'=>'required | max:10 | unique:teachers,username',
'mobileno'=>'required | numeric | min:11',
'email'=>'required | email',
'password'=>'required | min:8',
'confirmpassword'=>'required | same:password',
'gender'=>'required');
$validator= Validator::make($req->all(),$rules);
if($validator->fails())
{
    return response()->json($validator->errors(),401);
}else 
{
    $tr = new teacher ();
    $tr->first_name= $req->first_name;
    $tr->last_name= $req->last_name;
    $tr->username= $req->username;
    $tr->mobileno= $req->mobileno;
    $tr->email= $req->email;
    $tr->password= $req->password;
    $tr->gender= $req->gender;
    $tr->department= $req->department;
    $tr->appearance= $req->appearance;
    $tr->created_at=$req->created_at;
    $tr->updated_at=$req->updated_at;

    $success=$tr->save();
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
}
