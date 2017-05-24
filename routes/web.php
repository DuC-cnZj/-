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

Route::get('/', 'HomeController@welcome');

/*Route::get('duc', function () {
    return view('duc');
});*/
Route::post('store', 'HomeController@store')->name('store');


Route::post('search', 'SearchController')->name('search');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home',  'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('company', 'SubCompanyController');
	Route::resource('company.station', 'SubstationController');
	Route::resource('station.courier', 'CourierController');
	Route::resource('user', 'UserController');
	Route::resource('thing', 'ThingController');
	Route::get('deliver', 'ThingController@deliver')->name('deliver');
	Route::patch('updatething', 'ThingController@updateThing')->name('updateThing');
	Route::get('tongji', 'ThingController@statistics')->name('statistics');
	Route::post('tongjiAll', 'ThingController@tongjiAll')->name('tongji');
});
