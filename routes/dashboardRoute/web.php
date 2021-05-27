<?php

use Illuminate\Support\Facades\Route;

Route::prefix("dashboard")->name("dashboard.")->group(function (){

    //routing index

    Route::group(
        [
            'middleware' => ['web' , 'auth'],
        ], function () {
            Route::get('/index', 'dashboard@view')->name('admin');
    });

//routing levels

    Route::group(
        [
            'middleware' => ['web'],
        ], function () {
        Route::get('levels', 'levels@index')->name('level');
        Route::post('addLevel', 'levels@create')->name('addLevel');
        Route::get('editLevel/{id}', 'levels@edit')->name('editLevel');
        Route::post('updateLevels/{id}', 'levels@update')->name('updateLevels');
        Route::post('delete/{id}', 'levels@destroy')->name('deleteLevels');
    });




});