<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;
use App\Information;

class firsrContactController extends Controller
{
    public function index () {

        $info=Information::orderBy('created_at', 'desc')->take(6)->get();
        return view('firstcontact',compact('info'));
    }
    
}
