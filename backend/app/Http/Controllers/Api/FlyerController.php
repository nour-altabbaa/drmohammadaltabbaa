<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Flyer;

class FlyerController extends Controller
{
    public function index ()
    {   return Flyer::all(); }
}
