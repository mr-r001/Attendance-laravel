<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade as PDF;

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

Route::get('/auth', 'Auth\LoginController@adminLogin')->name('adminLogin');

Route::get('/login', 'Auth\LoginController@adminLogin')->name('login');

Route::get('/', function () {
    return redirect('/auth');
});

// Route::resource('absen', 'AbsenController');

// ROUTE FOR ADMIN ONLY
Route::name('admin.')->prefix('admin')->middleware(['auth', 'admin', 'active', 'check.session'])->group(function () {

    // Dashboard
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('card', 'AdminController@card')->name('card');

    // Data Karyawan
    Route::resource('customer', 'UserController');
    Route::get('change-password', 'UserController@changePassword')->name('changePassword');
    Route::post('update-password', 'UserController@updatePassword')->name('updatePassword');

    Route::resource('tracking-bpkb', 'AttendanceController');
    Route::resource('tracking-stnk', 'RekapController');

    Route::resource('permission', 'PermissionController');
});
