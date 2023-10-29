<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Interview;

class InterviewController extends Controller
{
    public function index ()
    {   return Interview::all(); }
}
