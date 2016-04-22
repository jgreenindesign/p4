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



Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});