<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lecture;

class LectureController extends Controller
{
    public function index ()
    {   return Lecture::all(); }
}
