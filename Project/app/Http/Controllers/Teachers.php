<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\teacher;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;
use Hash;

class Teachers extends Controller
{
   public function register()
   {
       return view('account.signup');
   }
   public function login()
   {
       return view('account.login');
   }
    public function signup(Request $req)

    {
        $req->validate( [
            'first_name'=>'required | regex:/^[A-Z a-z]+$/',
            'last_name'=>'required | regex:/^[A-Z a-z]+$/',
            'username'=>'required | max:10 | unique:teachers,username',
            'mobileno'=>'required | numeric | min:11',
            'email'=>'required | email',
            'password'=>'required | min:8',
            'confirmpassword'=>'required | same:password',
            'gender'=>'required',
            'department'=>'required',
        ],
    [
       'username.min'=>'Should be greater than 5 characters',
       'username.max'=>'Username should be Under 10 characters',
       'confirmpassword.same'=>'password didnt match',
       'mobileno.numeric'=>'Only Numbers are allowed' 


        
    ]
    );
    $tr = new Teacher ();
    $tr->first_name= $req->first_name;
    $tr->last_name= $req->last_name;
    $tr->username= $req->username;
    $tr->mobileno= $req->mobileno;
    $tr->email= $req->email;
    $tr->password= $req->password;
    $tr->Gender= $req->gender;
    $tr->Department= $req->department;
    $tr->Appearance= $req->appear;

    $tr->save();
    session()->flash('msg','Registration complete');

     return redirect()->route('signin');

    }
    public function request (Request $req)
    {
        $id=$req->$id;
        $teacher = Teacher :: where('$id','=','$req->id')->first();
    }
    public function profile()
    {
        return view ('Teacher.tprofile');
    }


    public function loginsubmit (Request $req)
    {
        $tr=teacher::where('email',$req->email)->where('password',md5($req->password))->first();
        if($tr)
        {
            session()->put('email','tr->email');
            return redirect()->route('profile');
        }
        session()->flash('msg','unauthorize login');
       // return redirect()->route('signin');
    }
    


    public function edit()
    {
        $valu = Session::get('email');
        $teachers = DB::select('select first_name,last_name,mobileno,Department from teachers where email="$valu"');
        return view('Teacher.editprofile',['teachers'=>$teachers]);
        //return view('Teacher.editprofile');
    }



    
    public function editprofile(Request $req)
    {
       /* $teachers = DB::select('select * from students where section="A"');
        return view('sections.sectionA',['students'=>$students]);
        $value = Session::get('email');

        $tr =teacher::where('email','=','$value')->first();*/
        $user=auth::user();
        $tr->first_name= $req->first_name;
        $tr->last_name= $req->last_name;
        $tr->mobileno= $req->mobileno;
        
       
        
        $tr->Department= $req->Department;
        $tr->save();
        
    
         return redirect()->route('profile');
        
    }
    public function change()
    {
        
        return view('Teacher.changepass');
    }

    public function updatesubmit(Request $req){
$req->validate([
    'oldpass'=>'required',
    'newpass'=>'required|min:8|max:20',
    'confpass'=>'required|same:newpass'

], [ 'newpass.min'=>'Password should be Minimum 8 characters',
'confpass.same'=>'Password didnt match'
]);
//$current_user=auth()->user();
if(!Hash::check($req->oldpass,auth()->user()->password))
{
  
   
        return back()-with('error','current password  isnt correct');

} user::whereId(auth()->user()->id)->update([ 'password'=>Hash::make($req->newpass)]); 
 return back()->with('success','password successfully updated');


}
}