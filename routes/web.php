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
Auth::routes(['verify' => true]);
Route::get('/', 'HomeController@index')->name('home')->middleware('verified');
Route::group(
    [
        'middleware' => [ "auth" , "web"],
        'namespace'=>'publicControllers'
    ], function () {
       /*add Post*/
    Route::get('getPagePost', 'AddPostController@index')->name('addPost');
    Route::get('/findNameMajor', 'AddPostController@findNameMajor');
    Route::post('addPost', 'AddPostController@create')->name('addedPost');
//    Route::post('updatePost/{id}', 'AddPostController@update')->name('updatePost');
//    Route::post('deletePost/{id}', 'AddPostController@destroy')->name('deletePost');

    /*get category and major*/
    Route::get('majorsController', 'majorsController@index')->name('majorsController');
    Route::get('/findNameMajor', 'AddPostController@findNameMajor');
    Route::post('addPost', 'AddPostController@create')->name('addedPost');

});






