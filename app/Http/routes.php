<?php

# Root
Route::get('/', 'HomeController@index');

# Authentication
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::group([ 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth.admin' ], function() {
    # Root admin
    Route::get('/', 'HomeController@index');

    # Regions
    Route::resource('regions', 'RegionsController');
});
