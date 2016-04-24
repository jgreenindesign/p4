<?php

Route::get('/', function () {
    return view('landing');
});

# Routes for Loggin In
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');

# Routes for Creating a new profile
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');

# Process logout
Route::get('/logout', 'Auth\AuthController@logout');


## Routes for Security ##
# Routes for Creating a new customer
Route::group(['middleware' => 'auth'], function () {

    Route::get('/create-customer', 'SecureController@getCreateCustomerPage');
    Route::post('/create-customer', 'SecureController@postCreateCustomerPage');

    Route::get('/customers', 'SecureController@getCustomersPage');
    Route::post('/customers', 'SecureController@postCustomersPage');

    # Routes for Creating a new customer
    Route::get('/profile', 'SecureController@getProfilePage');
    Route::post('/profile', 'SecureController@postProfilePage');

    Route::get('/customer/{customer_id}', 'SecureController@getCustomerPage');

    Route::get('/sales', 'SecureController@getSalesPage');

    Route::get('/dashboard', 'SecureController@getDashboardPage');
});


Route::get('/debug', function() {

	// Use the QueryBuilder to get all the customers
	$customers = DB::table('customers')->get();

	// Output the results
	foreach ($customers as $customer) {
	    echo $customer->customer_name.'<br>';
	}
	
});

Route::get('/show-login-status', function() {

    # You may access the authenticated user via the Auth facade
    $user = Auth::user();

    if($user) {
        echo 'You are logged in.';
        dump($user->toArray());
    } else {
        echo 'You are not logged in.';
    }

    return;

});