<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeachersApi;
use App\Http\Controllers\StudentApi;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/teacherlist',[TeachersApi::class,'Allteachers']);
Route::get('/teacherlist/{id?}',[TeachersApi::class,'searchteacher']);
Route::post('/add',[TeachersApi::class,'addteacher']);
Route::put('/update',[TeachersApi::class,'update']);
Route::delete('/delete/{id}',[TeachersApi::class,'delete']);
Route::post('/add/apivalidation',[TeachersApi::class,'apivalidate']);

Route::get('/studentlist',[StudentApi::class,'studentlist']);
Route::get('/student/{id?}',[StudentApi::class,'findstudent']);
Route::post('/addstudent',[StudentApi::class,'addstudent']);
Route::Delete('/deletestudent',[StudentApi::class,'delete']);
Route::put('/student/update',[StudentApi::class,'update']);



