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
    * GET and POST for creating a Customer
    */
    public function getCreateCustomerPage() {
        return view('secure.create-customer');
    }


    public function postCreateCustomerPage(Request $request) {

        $customer = new \p4\Customer();

        $customer->name = $request->name;
        $customer->user_id = \Auth::user()->id;
        $customer->city = $request->city;
        $customer->state = $request->state;
        $customer->zip = $request->zip;
        $customer->phone = $request->phone;
        $customer->email = $request->email;

        $customer->save();

        return redirect('/customers');
    }   


    /*
    * GET and POST for individual Customer Page
    */
    public function getCustomerPage($id) {
        
        $customer = \p4\Customer::where('id', '=', $id)->first();
        $sales = \p4\Sales::where('customer_id', '=', $id)->get();

        return view('secure.customer')->with('customer', $customer)->with('sales', $sales);

        //echo $customer;
    }

    public function postCustomerPage(Request $request) {
        
        $customer = \p4\Customer::find($request->id);

        $customer->city = $request->city;
        $customer->state = $request->state;
        $customer->zip = $request->zip;
        $customer->phone = $request->phone;
        $customer->email = $request->email;

        $customer->save();

        return redirect('/customers');
    }    


    /*
    * GET for all Customers Page
    */
    public function getCustomersPage() {

        $id = \Auth::user()->id;
        $column = 'user_id';

        $customers = \p4\Customer::where($column, '=', $id)->get();

        return view('secure.customers')->with('customers', $customers);
    }



    /*
    * POST for Sales Delete
    */
    public function postDeleteSale($id) {

        \DB::table('Sales')->where('sales_id', '=', $id)->delete();

        return view('secure.dashboard');
    }


    /*
    * GET for Dashboard Page
    */
    public function getDashboardPage() {


        return view('secure.dashboard');
    }

}

?>