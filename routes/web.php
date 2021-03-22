<?php

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

Route::get('/', function () {
    return view('pages.home-page');
});
Route::get('/createplayer','App\Http\Controllers\pemainController@create');
Route::get('/topscore-page', 'App\Http\Controllers\pemainController@readTopScore');

Route::get('/home-page', function(){
    return view('pages.home-page');
});

Route::get('/topassist-page', 'App\Http\Controllers\pemainController@readTopAssist');

Route::get('/news-page', function(){
    return view('pages.news-page');
});

Route::get('/highlight-page', function(){
    return view('pages.highlight-page');
});

Route::get('/login-page', function(){
    return view('pages.login-page');
});

Route::get('/admin-page', function(){
    return view('pages.admin-page');
});

Route::get('/crud-player-page', 'App\Http\Controllers\pemainController@readDataPemain');

Route::get('/crud-club-page', function(){
    return view('pages.crud-club-page');
});

Route::get('/crud-hasil-pertandingan-page', function(){
    return view('pages.crud-hasil-pertandingan-page');
});


Route::post('/postlogin','App\Http\Controllers\loginController@postlogin');
Route::post('/createplayer','App\Http\Controllers\pemainController@store');