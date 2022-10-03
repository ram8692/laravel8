<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

 Route::get('mail',function(){
     $data = ['name'=>'the test coder'];
     Mail::send([],[],function($msg){
        $msg->to("test@test.com","advance laravel user")->subject("advance laravel series")->setBody("hi this is working fine");
     });
     echo "mail sent";
 });