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

Route::get('/', 'App\Http\Controllers\LoginController@index');
Route::get('/login', 'App\Http\Controllers\LoginController@login');
Route::post('/post_login', 'App\Http\Controllers\LoginController@postLogin');

//ADMIN
Route::group([ 'prefix' => 'admin'], function () {
    Route::get('/dashboard', 'App\Http\Controllers\Admin\DashboardController@index');
    Route::get('/member/', 'App\Http\Controllers\Admin\MemberController@index');
    Route::get('/member/create', 'App\Http\Controllers\Admin\MemberController@create');
    Route::get('/member/edit', 'App\Http\Controllers\Admin\MemberController@edit');
    Route::get('/verified_certificate', 'App\Http\Controllers\Admin\VerifiedCertificateController@index');
    Route::get('/verified_certificate/certificate', 'App\Http\Controllers\Admin\VerifiedCertificateController@certificate');
    Route::get('/need_attention/', 'App\Http\Controllers\Admin\NeedAttentionController@index');
    Route::get('/need_attention/check', 'App\Http\Controllers\Admin\NeedAttentionController@checkCertificate');
    Route::get('/need_input/', 'App\Http\Controllers\Admin\NeedInputController@index');
    Route::get('/need_input/certificate', 'App\Http\Controllers\Admin\NeedInputController@certificate');
    Route::get('/setting/', 'App\Http\Controllers\Admin\SettingController@index');
});

//User
Route::group([ 'prefix' => 'user'], function () {
    Route::get('/dashboard', 'App\Http\Controllers\User\DashboardController@index');
    Route::get('/certificate', 'App\Http\Controllers\User\DashboardController@certificate');
});
