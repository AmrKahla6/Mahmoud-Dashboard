<?php

use Illuminate\Support\Facades\Auth;
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
    return view('dashboard.index');
})->middleware('adminauth:admin')->name('home');

Route::get('/login', 'Dashboard\LoginController@loginView')->name('admin.login-view');
Route::post('/do-login', 'Dashboard\LoginController@Login')->name('admin.doLogin');
Route::get('/logout', 'Dashboard\AuthController@logout')->name('admin.logout');

Route::get('/all-departments','Dashboard\DepartmentController@index')->name('all-departments');

// Auth::routes();
// Route::get('/', 'HomeController@index')->name('home');
