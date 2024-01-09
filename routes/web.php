<?php

use App\Http\Controllers\MainController;
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

Route::get('/', 'MainController@home');

Route::get('/home', 'MainController@home');

Route::get('/about', 'MainController@about');

Route::get('/treners', 'MainController@treners');

Route::get('/tarifs', 'MainController@tarifs');

Route::get('/enter', 'MainController@enter');

Route::get('/review', 'MainController@review')->name('review');

Route::post('/review/check', 'MainController@review_check');

/*
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/treners', function () {
    return view('treners');
});

Route::get('/tarifs', function () {
    return view('tarifs');
});

Route::get('/enter', function () {
    return view('enter');
});

Route::get('/review', function () {
    return view('review');
});

