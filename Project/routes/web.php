<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teachers;
use App\Http\Controllers\Studentcontroller;
use App\Http\Controllers\Mailcontroller;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Mail;
use App\Mail\Testmail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function () {
    return view("welcome");
    });
Route::get('/signup',[Teachers::class,'register'])->name('register');
Route::post('/signup',[Teachers::class,'signup'])->name('signup.submit');

Route::get('/login',[LoginController::class,'signin'])->name('signin');
Route::post('/login',[LoginController::class,'logsubmit'])->name('login.submit');
Route::get('/profile',[Teachers::class,'profile'])->name('profile');

Route::get('/sectiona',[Studentcontroller::class,'index']);
Route::get('/sectiond',[Studentcontroller::class,'indexx']);
Route::get('/sectionk',[Studentcontroller::class,'indexxx']);
Route::get('/tprofile/edit',[Teachers::class,'edit'])->name('edit');
Route::post('/tprofile/edit',[Teachers::class,'editprofile'])->name('editprofile.submit');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/tprofile/settings/changepassword',[Teachers::class,'change'])->name('change');
Route::post('/tprofile/settings/updatepassword',[LoginController::class,'updatesubmit'])->name('updatepass.submit');
//Route::get('/sectiona','Studentcontroller@index');
/*Route::get('/email',function () 
{
    Mail::to('amshakawat@gmail.com')->send(new Testmail());
    return new Testmail();
});*/
Route::get('/email',[Mailcontroller::class,'testemail']);
Route::get('/confirmemail',[Mailcontroller::class,'sendmail']);

