<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use Auth;
use App\Account;

class FavoriteController extends Controller
{
    public function Favo(){
        $info=Information::get();
        $user=Auth::user();
        return view('favorites.favorite', compact('info', 'user'));
    }
}
