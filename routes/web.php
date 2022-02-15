<?php

use Illuminate\Support\Facades\Redirect;
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
Auth::routes();

Route::get('/', 'MarkupController@create')->name('create')->middleware('auth');
Route::post('/register', 'MarkupController@store')->name('register')->middleware('auth');
Route::get('/logout', function(){
    Auth::logout();
    return redirect('/login');
})->name('logout');