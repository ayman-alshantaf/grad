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
Auth::routes();

Route::group(
    [
        'middleware' => [ "auth"]
    ], function () {
//    Route::get('/admin', 'dashboard@view')->name('admin');
//    Route::get('/dashboard', 'dashboard@view')->name('admin');

//    Route::get('/admin', function () {
//        return view("dashboardPage/dashboard");
//
//    })->name("admin");
//    Route::get('/dashboard' , function (){
//        return view("dashboardPage/dashboard");
//
//    })->name("admin");
//    return view('publicPages.singUp');
//       Route::get('/', 'HomeController@index')->name('home');
});






