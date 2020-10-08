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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'App\Http\Controllers\DashboardController@index');
//Route::get('/certificate', 'App\Http\Controllers\DashboardController@certificate');
Route::get('/login', 'App\Http\Controllers\DashboardController@login');

//ADMIN
Route::group([ 'prefix' => 'admin'], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');
    Route::get('/member/', 'App\Http\Controllers\Admin\MemberController@index');
    Route::get('/member/create', 'App\Http\Controllers\Admin\MemberController@create');
    Route::get('/member/edit', 'App\Http\Controllers\Admin\MemberController@edit');
    Route::get('/need_attention/', 'App\Http\Controllers\Admin\NeedAttentionController@index');
    Route::get('/need_attention/check', 'App\Http\Controllers\Admin\NeedAttentionController@checkCertificate');
    Route::get('/need_input/', 'App\Http\Controllers\Admin\NeedInputController@index');
    Route::get('/certificate', 'App\Http\Controllers\DashboardController@certificate');
    Route::get('/setting/', 'App\Http\Controllers\Admin\SettingController@index');
});
