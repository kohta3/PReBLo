<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'firsrContactController@index')->middleware('guest');

Route::resource('informations', 'InformationController')->middleware('auth');
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');
Route::resource('Search', 'SearchController',['only' => ['index','store','show']])->middleware('auth');

// ----------------------------------------AccountService----------------------------------------
Route::get('account', 'AccountController@index')->name('account');
Route::get('account/edit', 'AccountController@edit')->name('account.edit');
Route::put('account', 'AccountController@update')->name('account.update');


//heroku upload
if (env('APP_ENV') === 'production') {
        URL::forceScheme('https');
    }

Route::get('/informations/like/{id}', 'InformationController@like')->middleware('auth')->name('infolike');
Route::get('/informations/unlike/{id}', 'InformationController@unlike')->middleware('auth')->name('infounlike');