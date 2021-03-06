<?php

Route::group(['before' => '/'], function() {
    Route::post('login', ['as' => 'user.authenticate', 'uses' => 'Lavoaster\LightBlog\User\Controllers\UserController@authenticate'])->before('csrf');
    Route::get('logout', ['as' => 'user.logout', 'uses' => 'Lavoaster\LightBlog\User\Controllers\UserController@logout'])->before('csrf');
});