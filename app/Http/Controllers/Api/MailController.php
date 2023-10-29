<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\MyEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $body = $request->input('body');
        Mail::to('dr.mohammed.altabba@gmail.com')->send(new MyEmail($name, $email, $body));
        return true;
    }
}
