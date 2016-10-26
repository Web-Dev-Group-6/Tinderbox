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
	Route::get('/schedule', array('as' => 'dashboard.schedule', 'uses' => 'DashboardController@schedule'));
	Route::get('/qr', array('as' => 'dashboard.qr', 'uses' => 'DashboardController@qr'));
	Route::get('/map', array('as' => 'dashboard.map', 'uses' => 'DashboardController@map'));
	Route::get('/security', array('as' => 'dashboard.security', 'uses' => 'DashboardController@security'));
	Route::get('/information', array('as' => 'dashboard.information', 'uses' => 'DashboardController@information'));
	Route::get('/profile', array('as' => 'dashboard.profile', 'uses' => 'DashboardController@profile'));
	Route::get('/login', array('as' => 'dashboard.login', 'uses' => 'DashboardController@login'));
	Route::get('/registration', array('as' => 'dashboard.registration', 'uses' => 'DashboardController@registration'));
	Route::get('/messages', array('as' => 'dashboard.messages', 'uses' => 'DashboardController@messages'));
});