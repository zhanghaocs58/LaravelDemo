<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::redirect('/','register/hello');

//Route::get('register/hello', 'Auth\RegisterController@hello');

Route::group(['namespace' => 'Auth','prefix' => 'auth'],function (){
    Route::post('register/hello', 'RegisterController@hello');
    Route::post('register/test', 'RegisterController@test');
});