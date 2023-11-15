<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('Login', function () {
    return view('Login');
})->name('Login');

Route::get('Register', function () {
    return view('Register');
})->name('Register');

Route::get('/', function () {
    return view('Dashboard');
})->name('Dashboard');

Route::get('/Dashboard', 'App\Http\Controllers\DashboardController@index')->name('Dashboard');

Route::post('/Login', 'App\Http\Controllers\LoginController@index')->name('Login');

Route::post('/Register', 'App\Http\Controllers\RegisterController@index')->name('Register');
