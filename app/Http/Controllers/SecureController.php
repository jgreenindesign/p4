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

        $this->validate($request, [

            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);


        $user = \p4\User::find($request->id);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->title = $request->title;
        $user->territory = $request->territory;
        $user->phone = $request->phone;

        $user->save();

        \Session::flash('message', 'Your profile has been updated');
        return redirect('/dashboard');
    }


    /*
    * GET and POST for creating a Customer
    */
    public function getCreateCustomerPage() {
        return view('secure.create-customer');
    }


    public function postCreateCustomerPage(Request $request) {

        $this->validate($request, [

            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        $customer = new \p4\Customer();

        $customer->name = $request->name;
        $customer->user_id = \Auth::user()->id;
        $customer->city = $request->city;
        $customer->state = $request->state;
        $customer->zip = $request->zip;
        $customer->phone = $request->phone;
        $customer->email = $request->email;

        $customer->save();

        \Session::flash('message', 'Customer '.$customer->name.' has been created');

        return redirect('/customers');
    }   


    /*
    * GET and POST for individual Customer Page
    */
    public function getCustomerPage($id) {

        $customer = \p4\Customer::where('id', '=', $id)->first();
        $sales = \p4\Sales::where('customer_id', '=', $id)->get();

        $customer_total = '';

        foreach ($sales as $sale) {
            $customer_total += $sale->sales_product_total;
        }



        return view('secure.customer')
        ->with('customer', $customer)
        ->with('customer_total', $customer_total)
        ->with('sales', $sales);

    }

    public function postCustomerPage(Request $request) {

        $this->validate($request, [

            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);
        
        $customer = \p4\Customer::find($request->id);

        $customer->city = $request->city;
        $customer->state = $request->state;
        $customer->zip = $request->zip;
        $customer->phone = $request->phone;
        $customer->email = $request->email;

        $customer->save();

        \Session::flash('message', 'Customer '.$customer->name.' has been updated');

        return redirect('/customer/'.$customer->id);
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

        \DB::table('sales')->where('sales_id', '=', $id)->delete();

        $id = \Auth::user()->id;
        $column = 'user_id';

        $customers = \p4\Customer::where($column, '=', $id)->get();

        \Session::flash('message', 'The sale has been deleted');

        return view('secure.customers')->with('customers', $customers);
    }


    /*
    * GET for Dashboard Page
    */
    public function getDashboardPage() {

        $id = \Auth::user()->id; //logged in user
        $company_total = ''; //company sales total
        $customer_count = ''; //number of customers based on user
 
        $customer_count = \p4\Customer::where('user_id', '=', $id)
        ->select('id')
        ->count();

        $sales = \p4\Sales::with('customer')
        ->select('sales_product_total')
        ->get();

        foreach ($sales as $sale) {
            $company_total += $sale->sales_product_total;
        }

        return view('secure.dashboard')
        ->with('customer_count', $customer_count)
        ->with('company_total', $company_total);
    }

}

?>