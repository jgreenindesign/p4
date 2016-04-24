<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;
use Illuminate\Http\Request;

class secureController extends Controller {

    
    /*
    * GET and POST for profile page
    */
    public function getProfilePage() {
        return view('secure.profile');
    }

    public function postProfilePage(Request $request) {
        $user = \p4\User::find($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->title = $request->title;
        $user->territory = $request->territory;
        $user->phone = $request->phone;

        $user->save();

        /*\Session::flash('message', 'Your change have been saved');*/
        return redirect('/dashboard');
    }


    /*
    * GET and POST for individual Customer Page
    */
    public function getCreateCustomerPage() {
        return view('secure.create-customer');
    }   


    /*
    * GET for all Customers Page
    */
    public function getCustomersPage() {

        $customers = \p4\Customer::all();
        return view('secure.customers')->with('customers', $customers);
    }



    /*
    * GET for Sales Page
    */
    public function getSalesPage() {

        
        return view('secure.sales');
    }


    /*
    * GET for Dashboard Page
    */
    public function getDashboardPage() {


        return view('secure.dashboard');
    }

}

?>