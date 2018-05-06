<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Blade::setContentTags('[[', ']]'); // for variables and all things Blade
Blade::setEscapedContentTags('[[[', ']]]'); // for escaped data

Route::get('/login', array('before' => 'guest', 'uses' => 'LoginController@showLogin'));

Route::post('/login', 'LoginController@login');

Route::get('/logout', array('before' => 'auth', 'uses' => 'LoginController@logout'));

Route::get('/', array('before' => 'auth', 'uses' => 'AdminPanelController@index'));

Route::get('/dateRange', 'AdminPanelController@getDateRange');

Route::get('/report', 'AdminPanelController@getReport');