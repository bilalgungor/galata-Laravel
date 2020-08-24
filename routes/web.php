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


Route::namespace('Backend')->group(function (){
    Route::prefix('admin')->group(function (){
        Route::get('/dashboard','DefaultController@index')->name('admin.Index')->middleware('admin');
        Route::get('/','DefaultController@login')->name('admin.Login');
        Route::get('/logout','DefaultController@logout')->name('admin.Logout');
        Route::post('/','DefaultController@authenticate')->name('admin.Authenticate');
    });
    Route::middleware(['admin'])->group(function (){
    Route::prefix('admin')->group(function (){
        Route::resource('settings','SettingController');
        Route::resource('slider','SliderController');
        Route::resource('about','AboutController');
        Route::resource('staff','StaffController');
        Route::resource('blog','BlogController');
        Route::resource('service','ServiceController');
        Route::resource('customer','CustomerController');
        Route::resource('reference','ReferenceController');
    });
    });
});


Route::get('','Frontend\DefaultController@index')->name('default.Index');
Route::get('/hizmetler/{slug}','Frontend\PageController@index')->name('service.Index');
Route::get('/kurumsal/hakkimizda','Frontend\AboutController@index')->name('about.Index');
Route::get('/kurumsal/kadromuz','Frontend\DefaultController@staff')->name('staff.Index');
Route::get('/kurumsal/referanslar','Frontend\DefaultController@ref')->name('ref.Index');
Route::get('/blog','Frontend\BlogController@index')->name('blog.Index');
Route::get('/blog/{slug}','Frontend\BlogController@detail')->name('blogDetail.Index');
Route::get('/iletisim','Frontend\DefaultController@contact')->name('contact.Index');
Route::post('/iletisim','Frontend\DefaultController@sendMail');



