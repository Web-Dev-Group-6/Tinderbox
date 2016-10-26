<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(array('namespace' => 'Dashboard', 'middleware' => 'web'), function() {
	Route::get('/', array('as' => 'dashboard.index', 'uses' => 'DashboardController@index'));
});