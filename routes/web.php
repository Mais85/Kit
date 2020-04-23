<?php

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

Route::get('/', function (){

    return view('welcome');
});

Auth::routes(['register'=>false]);

//Route::get('/', 'HomeController@index')->name('home');

Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>['auth']],function (){

    Route::get('/','AdminController@index')->name('admin');

    Route::group(['namespace' => 'Pages', 'prefix' => '/pages'],function (){

        Route::get('/index','IndexPageController@index');
        Route::post('/index/create','IndexPageController@store')->name('indexcreate');

        Route::get('/about-us','AboutPageController@index');
        Route::post('/about-us/create-edit','AboutPageController@store')->name('aboutus');

        Route::get('/projects','ProjectPageController@index');
        Route::post('/projects/create-edit','ProjectPageController@store')->name('projects');

    });

    //Employers
    Route::get('/employers', 'EmployerController@index');
    Route::get('/employers/create', 'EmployerController@create');
    Route::post('/employers/create', 'EmployerController@store');
    Route::get('/employers/delete/{id}', 'EmployerController@destroy');
    Route::get('/employers/edit/{id}', 'EmployerController@edit');
    Route::post('/employers/edit/{id}', 'EmployerController@update');

    //Companies
    Route::get('/companies','CompanyController@index');
    Route::get('/companies/create','CompanyController@create');
    Route::post('/companies/create','CompanyController@store')->name('store');
    Route::get('/companies/edit/{slug}','CompanyController@edit')->name('editG');
    Route::post('/companies/edit/{slug}','CompanyController@update')->name('editP');
    Route::get('/companies/delete/{id}','CompanyController@destroy')->name('destG');

    //Settings
    Route::get('/setting','SettingController@index')->name('setting');
    Route::post('/setting','SettingController@store')->name('settingstore');

});
