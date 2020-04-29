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
    Route::get('/employers/edit/{slug}', 'EmployerController@edit');
    Route::post('/employers/edit/{slug}', 'EmployerController@update')->name('empupdate');

    //Companies
    Route::get('/companies','CompanyController@index');
    Route::get('/companies/create','CompanyController@create');
    Route::post('/companies/create','CompanyController@store')->name('store');
    Route::get('/companies/edit/{slug}','CompanyController@edit')->name('editG');
    Route::post('/companies/edit/{slug}','CompanyController@update')->name('editP');
    Route::get('/companies/delete/{id}','CompanyController@destroy')->name('destG');

    // news
    Route::get('/news','NewsController@index');
    Route::get('/news/create','NewsController@create');
    Route::post('/news/create','NewsController@store')->name('newscreate');
    Route::get('/news/edit/{slug}/{id}','NewsController@edit');
    Route::post('/news/edit','NewsController@update')->name('newsupdate');
    Route::get('/news/delete/{id}','NewsController@destroy');

    // services
    Route::get('/services','ServiceController@index');
    Route::get('/services/create','ServiceController@create');
    Route::post('/services/create','ServiceController@store');
    Route::get('/services/edit/{slug}/{id}','ServiceController@edit');
    Route::post('/services/edit','ServiceController@update')->name('serviceUpdate');
    Route::get('/services/delete/{id}','ServiceController@destroy');

    // projects
    Route::get('/projects','ProjectController@index');
    Route::get('/projects/create','ProjectController@create');
    Route::post('/projects/create','ProjectController@store');
    Route::get('/projects/edit/{slug}/{id}','ProjectController@edit');
    Route::post('/projects/edit','ProjectController@update')->name('projectsUpdate');
    Route::get('/projects/delete/{id}','ProjectController@destroy');


    // partners
    Route::get('/partners','PartnerController@index');
    Route::get('/partners/create','PartnerController@create');
    Route::post('/partners/create','PartnerController@store');
    Route::get('/partners/edit/{id}','PartnerController@edit');
    Route::post('/partners/edit','PartnerController@update')->name('partnersUpdate');
    Route::get('/partners/delete/{id}','PartnerController@destroy');

    // testimonials
    Route::get('/testimonials','TestimonialsController@index');
    Route::get('/testimonials/create','TestimonialsController@create');
    Route::post('/testimonials/create','TestimonialsController@store');
    Route::get('/testimonials/edit/{slug}/{id}','TestimonialsController@edit');
    Route::post('/testimonials/edit','TestimonialsController@update')->name('testimonialsUpdate');
    Route::get('/testimonials/delete/{id}','TestimonialsController@destroy');

    // referances
    Route::get('/referances','TestimonialsController@index');
    Route::get('/referances/create','TestimonialsController@create');
    Route::post('/referances/create','TestimonialsController@store');
    Route::get('/referances/edit/{slug}/{id}','TestimonialsController@edit');
    Route::post('/referances/edit','TestimonialsController@update')->name('testimonialsUpdate');
    Route::get('/referances/delete/{id}','TestimonialsController@destroy');

    //Settings
    Route::get('/setting','SettingController@index')->name('setting');
    Route::post('/setting','SettingController@store')->name('settingstore');

});
