<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('api/', function () {
    return view('welcome');
});

Route::get('api/account/create/', 'ApiController@CreateAccount');
Route::get('api/account/delete/', 'ApiController@DeleteAccount');
Route::get('api/login/', 'ApiController@Login');

/*
*   Others methods
*/



