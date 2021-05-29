<?php

use Illuminate\Support\Facades\Route;


Route::group(
    [
        'middleware' => [ 'web',"isadmin"],
        'prefix'=>'dashboard',
        'name'=>'dashboard.'
    ], function () {
    //routing index
    Route::get('/index', 'dashboard@view')->name('dashboard.admin');

    //routing students
    Route::get('Students', 'StudentsController@index')->name('dashboard.students');
    Route::post('addStudents', 'StudentsController@create')->name('dashboard.addStudents');
    Route::post('updateStudents/{id}', 'StudentsController@update')->name('dashboard.updateStudents');
    Route::post('deleteStudents/{id}', 'StudentsController@destroy')->name('dashboard.deleteStudents');
    //routing companies
    Route::get('companies', 'CompaniesController@index')->name('dashboard.companies');
    Route::post('addCompanies', 'CompaniesController@create')->name('dashboard.addCompanies');
    Route::post('updateCompanies/{id}', 'CompaniesController@update')->name('dashboard.updateCompanies');
    Route::post('deleteCompanies/{id}', 'CompaniesController@destroy')->name('dashboard.deleteCompanies');

    //routing levels
    Route::get('levels', 'levels@index')->name('dashboard.level');
    Route::post('addLevel', 'levels@create')->name('dashboard.addLevel');
    Route::post('updateLevels/{id}', 'levels@update')->name('dashboard.updateLevels');
    Route::post('deleteLevels/{id}', 'levels@destroy')->name('dashboard.deleteLevels');

    //Routes Categories
    Route::get('categories', 'CategoriesController@index')->name('dashboard.Category');
    Route::post('addCategory', 'CategoriesController@create')->name('dashboard.addCategory');
    Route::post('updateCategory/{id}', 'CategoriesController@update')->name('dashboard.updateCategory');
    Route::post('deleteCategory/{id}', 'CategoriesController@destroy')->name('dashboard.deleteCategory');

    //Routes Categories
    Route::get('majors', 'MajorsController@index')->name('dashboard.major');
    Route::post('addMajor', 'MajorsController@create')->name('dashboard.addMajor');
    Route::post('updateMajor/{id}', 'MajorsController@update')->name('dashboard.updateMajor');
    Route::post('deleteMajor/{id}', 'MajorsController@destroy')->name('dashboard.deleteMajor');

    //routing Governorate
    Route::get('Governorate', 'GovernorateController@index')->name('dashboard.Governorate');
    Route::post('addGovernorate', 'GovernorateController@create')->name('dashboard.addGovernorate');
    Route::post('updateGovernorate/{id}', 'GovernorateController@update')->name('dashboard.updateGovernorate');
    Route::post('deleteGovernorate/{id}', 'GovernorateController@destroy')->name('dashboard.deleteGovernorate');
});

