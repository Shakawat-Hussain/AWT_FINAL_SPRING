<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\teacher;
use Hash;

class LoginController extends Controller
{
   public function signin()
   {
       return view('account.login');
   }
   public function logsubmit(Request $req){

$user= teacher::where ("email",$req->email)->where('password',($req->password))->first();
  if($user)
        {
            $req->session()->put('email',$user->email);
            $req->session()->put('first_name',$user->first_name);
         $req->session()->flash('msg',"Login Successful");
            return view('Teacher.tprofile')
            ->with('user',$user);
         }
        else{
           session()->flash('msg',"userID password invalid");
            return redirect()->route('signin');
        }
    }
    public function logout(){
        session()->flush();
        return redirect()->route('signin');
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