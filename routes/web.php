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
        'middleware' => ["web"],
        'namespace'=>'publicControllers'
    ], function () {

    /*get Post*/
    Route::get('getPost', 'postsController@index')->name('getPost');
    Route::get('descriptionPost/{id}', 'postsController@descriptionPost')->name('descriptionPost');
    Route::get('specificMajor/{id}', 'postsController@specificMajor')->name('specificMajor');
//    Route::get('/findNameMajor', 'AddPostController@findNameMajor');

    /*add Post*/
    Route::get('addPost', 'AddPostController@index')->name('addPost');
    Route::get('/findNameMajor', 'AddPostController@findNameMajor');
    Route::post('addPost', 'AddPostController@create')->name('addedPost');

    /*get category and major*/
    Route::get('majors', 'majorsController@index')->name('majorsController');

    /*add and get speech*/
    Route::post('addSpeech', 'speechController@create')->name('addSpeech');

});






