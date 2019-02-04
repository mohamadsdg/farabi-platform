<?php

Route::group(['namespace' => 'Frontend'], function () {

    // Home
    Route::get('/', ['as' => 'frontend.home.index', 'uses' => 'HomeController@index']);


    // Startup
    Route::group(['namespace' => 'Startup', 'prefix' => 'startup'], function () {
        Route::get('/', function () {
            return 'startup section';
        });

        /*
        * Register
        */

        // Founder
        Route::get('/register/step/founder', ['as' => 'frontend.startup.register.founder.create', 'uses' => 'FounderController@create']);
        Route::post('/register/step/founder', ['as' => 'frontend.startup.register.founder.store', 'uses' => 'FounderController@store']);
        Route::get('/register/step/founder/edit', ['as' => 'frontend.startup.register.founder.edit', 'uses' => 'FounderController@edit']);
        Route::post('/register/step/founder/update', ['as' => 'frontend.startup.register.founder.update', 'uses' => 'FounderController@update']);

        // Team
        Route::get('/register/step/team', ['as' => 'frontend.startup.register.team.create', 'uses' => 'TeamController@create']);
        Route::post('/register/step/team', ['as' => 'frontend.startup.register.team.store', 'uses' => 'TeamController@store']);
        Route::get('/register/step/team/edit', ['as' => 'frontend.startup.register.team.edit', 'uses' => 'TeamController@edit']);
        Route::post('/register/step/team/update', ['as' => 'frontend.startup.register.team.update', 'uses' => 'TeamController@update']);

        // Startup
        Route::get('/register/step/startup', ['as' => 'frontend.startup.register.startup.create', 'uses' => 'StartupController@create']);
        Route::post('/register/step/startup', ['as' => 'frontend.startup.register.startup.store', 'uses' => 'StartupController@store']);
        Route::get('/register/step/startup/edit', ['as' => 'frontend.startup.register.startup.edit', 'uses' => 'StartupController@edit']);
        Route::post('/register/step/startup/update', ['as' => 'frontend.startup.register.startup.update', 'uses' => 'StartupController@update']);

        // Upload Dir
        Route::post('/upload', ['as' => 'frontend.startup.upload', 'uses' => 'UploadController@upload']);
    });

});
