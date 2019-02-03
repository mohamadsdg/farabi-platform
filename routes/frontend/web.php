<?php

Route::group(['namespace' => 'Frontend'], function () {

    // Home
    Route::get('/', ['as' => 'frontend.home.index', 'uses' => 'HomeController@index']);


    // Startup
    Route::group(['namespace' => 'Startup', 'prefix' => 'startup'], function () {
        Route::get('/', function () {
            return 'startup section';
        });

        // Register
        Route::get('/register/step/founder', ['as' => 'frontend.startup.register.founder-form', 'uses' => 'RegisterController@founder']);
        Route::post('/register/step/founder', ['as' => 'frontend.startup.register.founder', 'uses' => 'RegisterController@doFounder']);

        Route::get('/register/step/team', ['as' => 'frontend.startup.register.team-form', 'uses' => 'RegisterController@team']);
        Route::post('/register/step/team', ['as' => 'frontend.startup.register.team', 'uses' => 'RegisterController@doTeam']);

        Route::get('/register/step/complete', ['as' => 'frontend.startup.register.complete-form', 'uses' => 'RegisterController@complete']);
        Route::post('/register/step/complete', ['as' => 'frontend.startup.register.complete', 'uses' => 'RegisterController@complete']);

        // Upload Dir
        Route::post('/upload', ['as' => 'frontend.startup.upload', 'uses' => 'UploadController@upload']);
    });

});
