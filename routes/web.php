<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function (){
//
//    return view('site.index');
//});

Auth::routes(['register'=>false]);

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
    Route::get('/referances','ReferanceController@index');
    Route::get('/referances/create','ReferanceController@create');
    Route::post('/referances/create','ReferanceController@store');
    Route::get('/referances/edit/{slug}/{id}','ReferanceController@edit');
    Route::post('/referances/edit','ReferanceController@update')->name('referanceUpdate');
    Route::get('/referances/delete/{id}','ReferanceController@destroy');

    // certificates
    Route::get('/certificates','CertificateController@index');
    Route::get('/certificates/create','CertificateController@create');
    Route::post('/certificates/create','CertificateController@store');
    Route::get('/certificates/edit/{slug}/{id}','CertificateController@edit');
    Route::post('/certificates/edit','CertificateController@update')->name('certificateUpdate');
    Route::get('/certificates/delete/{id}','CertificateController@destroy');

    // alboms
    Route::get('/alboms','AlbomController@index');
    Route::get('/alboms/create','AlbomController@create');
    Route::post('/alboms/create','AlbomController@store');
    Route::get('/alboms/edit/{slug}/{id}','AlbomController@edit');
    Route::post('/alboms/edit','AlbomController@update')->name('AlbomUpdate');
    Route::get('/alboms/delete/{id}','AlbomController@destroy');
    Route::post('/alboms/photo','PhotoController@store');
    Route::post('/alboms/photo/delete/{id}','PhotoController@delPhoto');
    Route::post('/alboms/photo/update/{id}','PhotoController@update');
    Route::delete('/alboms/photo/delete','PhotoController@delete');




    //Settings
    Route::get('/setting','SettingController@index')->name('setting');
    Route::post('/setting','SettingController@store')->name('settingstore');

});

Route::redirect('/','az');
//site
Route::group(['namespace'=>'Site','middleware'=>['auth']],function(){

    Route::get('{local}/', 'MainController@index')->name('main');
    Route::get('{local}/about', 'AboutController@index')->name('about');
    Route::get('{local}/services', 'ServicesController@index')->name('services');
    Route::get('{local}/services/{slug?}', 'ServicesController@show')->name('servicesItem');
    Route::get('{local}/our-projects', 'ProjectsController@index')->name('ourprojects');
    Route::get('{local}/project/{slug?}', 'ProjectsController@show')->name('project');
    Route::get('{local}/clients', 'ClientsController@index')->name('clients');
    Route::get('{local}/news', 'NewsController@index')->name('news');
    Route::get('{local}/news/{slug}/{id}', 'NewsController@show')->name('newsItem');
    Route::get('{local}/test-ref', 'Tes_RefController@index')->name('tes_ref');
    Route::get('{local}/gallery', 'GalleryController@index')->name('gallery');
    Route::get('{local}/gallery/{id}', 'GalleryController@showphotos')->name('getPhotos');
    Route::get('{local}/contacts', 'ContactController@index')->name('contact');
    Route::get('{local}/companies/{slug}/{id}', 'CompanyController@show')->name('companies');

});

