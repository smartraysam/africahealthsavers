<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\events;
class IndexController extends Controller
{
    //

    public function index()
    {
        $events = events::orderBy('id', 'desc')->take(3)->get();
        return view('index',  compact('events'));
    }

}