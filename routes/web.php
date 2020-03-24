<?php

Route::get('/', function () {
    return view('frontend.home');
});

   Route::get('admin', 'AdminController@index')->name('admin');
   Route::get('home', 'HomeController@index');
   Auth::routes();

    Route::name('admin')->group(function () {
        Route::get('admin', 'AdminController@index');
        
    });

    // Route::get('property/search', 'PropertyController@search')->name('property.search');
    Route::resource('property', 'PropertyController');
    Route::resource('blog', 'BlogController');
    Route::resource('agent', 'AgentController');
    Route::resource('profile', 'ProfileController');
    Route::resource('type', 'TypeController');