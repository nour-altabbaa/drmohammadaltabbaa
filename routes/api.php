<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('interviews', 'App\Http\Controllers\Api\InterviewController@index');
Route::get('lectures', 'App\Http\Controllers\Api\LectureController@index');
Route::get('flyers', 'App\Http\Controllers\Api\FlyerController@index');
Route::get('books', 'App\Http\Controllers\Api\BookController@index');
Route::get('messages', 'App\Http\Controllers\Api\MessageController@index');
Route::post('sendEmail','App\Http\Controllers\Api\MailController@sendEmail');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
