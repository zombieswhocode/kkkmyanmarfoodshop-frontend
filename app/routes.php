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

Route::get('/test', function()
{
	return View::make('home');
});

/*
|--------------------------------------------------------------------------
| Main pages routes
|--------------------------------------------------------------------------
|
|
*/
Route::get('/',array( 'uses'=>'PageController@showHome' ));
Route::get('/monthly',array( 'uses'=>'PageController@showMonthly' ));
Route::get('/order',array( 'uses'=>'PageController@showOrder' ));
Route::get('/reservation',array( 'uses'=>'PageController@showReservation' ));
