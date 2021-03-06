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

    # Routes for Creating a new customer
    Route::get('/create-customer', 'SecureController@getCreateCustomerPage');
    Route::post('/create-customer', 'SecureController@postCreateCustomerPage');

    # Routes for Viewing Custoemrs
    Route::get('/customers', 'SecureController@getCustomersPage');
    Route::post('/customers', 'SecureController@postCustomersPage');

    # Routes for Viewing and Updating Profiles
    Route::get('/profile', 'SecureController@getProfilePage');
    Route::post('/profile', 'SecureController@postProfilePage');

    # Routes for Viewing Individual customers
    Route::get('/customer/{id}', 'SecureController@getCustomerPage');
    Route::post('/customer/{id}', 'SecureController@postCustomerPage');

    # Routes for the dashboard
    Route::get('/dashboard', 'SecureController@getDashboardPage');

    # (in development)Routes for Viewing an individual sale
    Route::post('/sale/{id}', 'SecureController@postDeleteSale');
});


Route::get('/debug', function() {

	// Use the QueryBuilder to get all the customers
	$customers = DB::table('customers')->get();

	// Output the results
	foreach ($customers as $customer) {
	    echo $customer->name.'<br>';
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