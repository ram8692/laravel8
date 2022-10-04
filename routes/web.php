<?php
use App\Mail\SendMarkDownMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Models\Member;

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
     
     Mail::TO("test@test.com")->send(new SendMarkDownMail());
     echo "mail sent";
 });

 Route::get('queue',function(){
     //dispatch(new \App\Jobs\SendTestMailJob())->delay(now()->addSeconds(5));
     \App\Jobs\SendTestMailJob::dispatch()->delay(now()->addSeconds(5));
    echo "mail sent";
});

Route::get('queue2',function(){
    $member = Member::findOrFail(1);
   // dd($member);
    \App\Jobs\SendTestMailJob::dispatch($member)->delay(now()->addSeconds(5));
    echo "mail sent";

});