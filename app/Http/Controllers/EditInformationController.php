<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use Auth;
use App\Account;

class EditInformationController extends Controller
{
    public function editinfo(){
    $User=Auth::user()->name;
    $info=Information::where('user_name', $User)->get();
    return view('EditInformation',compact('info','User'));
    }
}
