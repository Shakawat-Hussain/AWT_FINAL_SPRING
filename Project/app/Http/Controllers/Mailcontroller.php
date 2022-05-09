<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\Testmail;
use App\Mail\Signup;
use Illuminate\Http\Request;

class Mailcontroller extends Controller
{
    public function testemail()
    {
        $details=['title'=>'Checking send  =mail', 'body'=>'------------'];
        Mail::to('amshakawat@gmail.com')->send(new Testmail($details));
        return "mail sent";
    }
    public function sendmail()
    {
        $name='shakawat';
        mail::to('shakawathussain@solution4u.com')->send(new Signup($name));
return view ('welcome');
    }
}
