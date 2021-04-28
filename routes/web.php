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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'user','namespace' => 'User'] , function (){
    Route::get('/personal', 'PersonalController@index')->name('personal.index');
    Route::get('/personal/contact', 'PersonalController@contact')->name('personal.contact');
    Route::get('/personal/emergency', 'PersonalController@emergency')->name('personal.emergency');
    Route::get('/personal/photo', 'PersonalController@photo')->name('personal.photo');
    Route::get('/personal/special', 'PersonalController@special')->name('personal.special');
});

Route::group(['prefix' => 'admin','namespace' => 'Admin'] , function (){
    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/transfer', 'AdminController@transfer')->name('admin.transfer');
    Route::get('/report', 'AdminController@reports')->name('admin.reports');
    Route::get('/payroll', 'AdminController@payroll')->name('admin.payroll');
});
