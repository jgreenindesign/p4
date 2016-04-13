<?php

Route::get('/', function () {
    return view('landing');
});

# Routes for Loggin In
Route::get('/login', 'LoginController@getLoginPage');
Route::post('/login', 'LoginController@postLoginPage');

# Routes for Creating a new profile
Route::get('/create-profile', 'CreateProfileController@getCreateProfilePage');
Route::post('/create-profile', 'CreateProfileController@postCreateProfilePage');


## Routes for Security ##

# Routes for Creating a new customer
Route::get('/create-customer', 'SecureController@getCreateCustomerPage');
Route::post('/create-customer', 'SecureController@postCreateCustomerPage');

Route::get('/customers', 'SecureController@getCustomersPage');
Route::post('/customers', 'SecureController@postCustomersPage');

# Routes for Creating a new customer
Route::get('/profile', 'SecureController@getProfilePage');
Route::post('/profile', 'SecureController@postProfilePage');

//Route::post('/customer/{}', 'CustomerController@postCustomerPage');

Route::get('/sales', 'SecureController@getSalesPage');

Route::get('/dashboard', 'SecureController@getDashboardPage');