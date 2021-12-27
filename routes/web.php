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

Route::get('/', 'AbsenController@index')->name('home');
Route::get('/attendance/in', 'AbsenController@in')->name('scan.masuk');
Route::get('/attendance/out', 'AbsenController@out')->name('scan.pulang');
Route::get('/attendance/in/{id}', 'AbsenController@checkin')->name('in');
Route::get('/attendance/out/{id}', 'AbsenController@checkout')->name('out');

// Route::resource('absen', 'AbsenController');

// ROUTE FOR ADMIN ONLY
Route::name('admin.')->prefix('admin')->middleware(['auth', 'admin', 'active', 'check.session'])->group(function () {

    // Dashboard
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('card', 'AdminController@card')->name('card');

    // Data Karyawan
    Route::resource('user', 'UserController');
    Route::get('change-password', 'UserController@changePassword')->name('changePassword');
    Route::post('update-password', 'UserController@updatePassword')->name('updatePassword');

    Route::resource('attedance', 'AttendanceController');
    Route::get('attedance_filter', 'AttendanceController@filter')->name('attedance.filter');
    Route::post('attedance_download', 'AttendanceController@download')->name('attedance.download');

    Route::resource('rekap', 'RekapController');

    Route::resource('permission', 'PermissionController');
});
