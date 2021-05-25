<?php

use Illuminate\Support\Facades\Route;




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath' , 'web'],
        'namespace'=>'dashboardController'
    ], function () {

       Route::get('/levels', 'levels@index')->name('level');
       Route::post('addLevel', 'levels@create')->name('addLevel');
});






