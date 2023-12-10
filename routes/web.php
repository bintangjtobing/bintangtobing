<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

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

Route::get('/instagram', function () {
    return Redirect::to('http://www.instagram.com/bcjlt');
});
Route::get('/about', function () {
    return Redirect::to('https://linktr.ee/hi_im_bintang');
});
Route::get('/', function () {
    return view('welcome2');
});
