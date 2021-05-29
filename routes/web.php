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
#Route untuk mengarahkan ke halaman awal (home)
Route::get('/', function () {
    return view('pages.home-page');
});
#Route untuk mengarahkan ke halaman create Player
Route::get('/createplayer','App\Http\Controllers\pemainController@create');
#Route untuk mengarahkan ke  halaman create club
Route::get('/createclub','App\Http\Controllers\clubController@create');
#Route untuk mengarahkan ke halaman top score
Route::get('/topscore-page', 'App\Http\Controllers\pemainController@readTopScore');
#Route untuk mengarahkan ke halaman home ketika tombol homepage diklik
Route::get('/home-page', function(){
    return view('pages.home-page');
});
#Route untuk mengarahkan ke halaman top assist
Route::get('/topassist-page', 'App\Http\Controllers\pemainController@readTopAssist');
#Route untuk mengarahkan ke halaman news
Route::get('/news-page', function(){
    return view('pages.news-page');
});
#Route untuk mengarahkan ke halaman highlight
Route::get('/highlight-page', function(){
    return view('pages.highlight-page');
});
#Route untuk mengarahkan ke halaman login
Route::get('/login-page', function(){
    return view('pages.login-page');
});
#Route untuk mengarahkan ke halaman admin
Route::get('/admin-page', function(){
    return view('pages.admin-page');
});
#Route untuk mengarahkan ke halaman crud player dengan method read Data
Route::get('/crud-player-page', 'App\Http\Controllers\pemainController@readDataPemain');
#Route untuk mengarahkan ke halaman crud club dengan method read Data
Route::get('/crud-club-page', 'App\Http\Controllers\clubController@readDataClub');
#Route untuk mengarahkan ke halaman crud player dengan method show data
Route::get('/crud-club-page/{club}', 'App\Http\Controllers\clubController@show');

#Route untuk mengarahkan ke halaman crud hasil pertandingan 
Route::get('/crud-hasil-pertandingan-page', function(){
    return view('pages.crud-hasil-pertandingan-page');
});

#Route untuk mengarahkan ke halaman admin ketika tombol login dikllik
Route::post('/postlogin','App\Http\Controllers\loginController@postlogin');
#Route untuk redirect ke halaman createplayer ketika selesai input data player
Route::post('/createplayer','App\Http\Controllers\pemainController@store');
#Route untuk redirect ke halaman createclub ketika selesai input data club
Route::post('/createclub','App\Http\Controllers\clubController@store');
#Route untuk redirect ke halaman createplayer ketika selesai input data player
Route::post('/createplayer', 'App\Http\Controllers\pemainController@store');
#Route untuk redirect ke halaman editplayer
// Route::get('/edit-player', function(){
//     return view('pages.edit-player-pages');
// });
Route::get('delete/{id_pemain}', 'App\Http\Controllers\pemainController@delete');
Route::get('edit/{id_pemain}', 'App\Http\Controllers\pemainController@showEditData');
Route::post('/edit-player', 'App\Http\Controllers\pemainController@editPlayer');