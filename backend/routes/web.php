<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MyEmail;
use Illuminate\Support\Facades\Mail;

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

// Route::get('send-mail', function () {
//     $name = "Funny Coder";
//     $email = "dr.mohammed.altabba@gmail.com";
//     $body = "Funny Coder";
//     Mail::to('dr.mohammed.altabba@gmail.com')->send(new MyEmail($name, $email, $body));
// });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('{any}', function () {
    return view('welcome');
})->where('any', '[\/\w\.-]*');
