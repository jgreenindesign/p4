<?php
Route::group(['middleware' => ['web']], function () 
{

	Route::get('/', function () {
	    return view('login');
	});

	# Routes for 
	#Route::get('/lorem-ipsum', 'LoremController@getLoremPage');
	Route::post('/login', 'LoginController@postLoginPage');
	Route::get('/login', 'LoginController@getLoginPage');


});