<?php

# Root
Route::get('/', 'HomeController@index');

# Authentication
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::group([ 'middleware' => [ 'auth', 'shinobi' ] ], function() {
    Route::group([ 'prefix' => 'admin', 'namespace' => 'Admin', 'roles' => 'admin' ], function() {
        # Root admin
        Route::get('/', 'HomeController@index');

        # Regions
        Route::resource('regions', 'RegionsController');
    });

    Route::group([ 'prefix' => 'company', 'namespace' => 'Company', 'roles' => 'company' ], function() {
        # Root company
        Route::get('/', 'HomeController@index');
    });

    Route::group([ 'prefix' => 'vehicle', 'namespace' => 'Vehicle', 'roles' => 'vehicle' ], function() {
        # Root vehicle
        Route::get('/', 'HomeController@index');
    });
});
