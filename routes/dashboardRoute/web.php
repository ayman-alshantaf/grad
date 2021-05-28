<?php

use Illuminate\Support\Facades\Route;


Route::group(
    [
        'middleware' => [ 'web',"auth"],
        'prefix'=>'dashboard',
        'name'=>'dashboard.'
    ], function () {
    //routing index
    Route::get('/index', 'dashboard@view')->name('dashboard.admin');
    //routing levels
    Route::get('levels', 'levels@index')->name('dashboard.level');
    Route::post('addLevel', 'levels@create')->name('dashboard.addLevel');
    Route::post('updateLevels/{id}', 'levels@update')->name('dashboard.updateLevels');
    Route::post('delete/{id}', 'levels@destroy')->name('dashboard.deleteLevels');

    //Routes Categories
    Route::get('categories', 'CategoriesController@index')->name('dashboard.Category');
    Route::post('addCategory', 'CategoriesController@create')->name('dashboard.addCategory');
    Route::post('updateCategory/{id}', 'CategoriesController@update')->name('dashboard.updateCategory');
    Route::post('deleteCategory/{id}', 'CategoriesController@destroy')->name('dashboard.deleteCategory');

});


//Route::prefix("dashboard")->name("dashboard.")->group(function (){
//
//    //routing index
//
//    Route::group(
//        [
//            'middleware' => ['web' , 'auth'],
//        ], function () {
//            Route::get('/index', 'dashboard@view')->name('admin');
//    });
//
////routing levels
//
//    Route::group(
//        [
//            'middleware' => ['web'],
//        ], function () {
//        Route::get('levels', 'levels@index')->name('level');
//        Route::post('addLevel', 'levels@create')->name('addLevel');
//        Route::get('editLevel/{id}', 'levels@edit')->name('editLevel');
//        Route::post('updateLevels/{id}', 'levels@update')->name('updateLevels');
//        Route::post('delete/{id}', 'levels@destroy')->name('deleteLevels');
//    });
//

//
//
//});