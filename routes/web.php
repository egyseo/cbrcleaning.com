<?php
Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/services/post-construction-cleaning', 'PublicPostConstructionController@index');

Route::get('/services/janitorial-services', 'PublicJanitorialController@index');

Route::get('/services/carpet-cleaning', 'PublicCarpetController@index');

Route::get('/services/office-cleaning', 'PublicOfficeController@index');

Route::get('/services/industrial-cleaning', 'PublicIndustrialController@index');

Route::get('/services/building-maintenance', 'PublicBuildingController@index');

Route::get('/services/church-cleaning', 'PublicChurchController@index');

Route::get('/services/pressure-cleaning', 'PublicPressureController@index');

Route::get('/services', 'PublicServiceController@index');

Route::get('/about', 'PublicAboutController@index');

Route::get('/about/overview', 'PublicAboutController@index');

Route::get('/about/faq', 'PublicAboutFAQController@index');

Route::get('/about/contact', ['as' => '/about/contact', 'uses' => 'PublicContactController@create']);

Route::post('/about/contact', ['as' => '/about/contact_store', 'uses' => 'PublicContactController@store']);

Route::get('/blog', 'PublicBlogController@index');

Route::get('/blog/cleaning-tips', 'PublicBlgCleaningTipController@index');

Route::get('/blog/floor-stripping', 'PublicBlgFloorStripController@index');

Route::get('/components/terms', 'TermController@index');

Route::get('/components/privacypolicy', 'PrivacyController@index');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/administrator/dashboard', function () {
         return view('backend.dashboard');
    });
    Route::resource('slide','SlideController' ,['as' => 'administrator']);   
});

Route::get('robots.txt', function () {
    if (App::environment() == 'production') {        
        Robots::addUserAgent('*');
        Robots::addSitemap('sitemap.xml');
    } else {        
        Robots::addDisallow('*');
     }
     return Response::make(Robots::generate(), 200, ['Content-Type' => 'text/plain']);
});

