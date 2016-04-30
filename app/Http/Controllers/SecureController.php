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

        /*\Session::flash('message', 'Your changes have been saved');*/
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

        return redirect('/customers');
    }   


    /*
    * GET and POST for individual Customer Page
    */
    public function getCustomerPage($id) {

        $customer = \p4\Customer::where('id', '=', $id)->first();
        $sales = \p4\Sales::where('customer_id', '=', $id)->get();

        return view('secure.customer')->with('customer', $customer)->with('sales', $sales);

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

        \DB::table('sales')->where('sales_id', '=', $id)->delete();

        return view('secure.dashboard');
    }


    /*
    * GET for Dashboard Page
    */
    public function getDashboardPage() {

        /*
        * Get Users Totals
        */

        $id = \Auth::user()->id;
        $column = 'user_id';

        $customers = \p4\Customer::where($column, '=', $id)->get();

        // $dashboard = \DB::table('users')
        //     ->join('customers', 'users.id', '=', 'customers.user_id')
        //     ->join('sales', 'customers.id', '=', 'customer_id')
        //     ->select('sales.sales_product_total')
        //     ->get();
        // echo var_dump($dashboard->sales_product_total);

        // foreach ($customers as $customer) {
        //     $total = \DB::table('sales')
        //     ->select(\DB::'sales_product_total')
        //     ->where('customer_id', '=', $customer->id)
        //     ->get();

        //     echo $total;
        // }

        /*
        * Get company totals
        */
        //$company_total = \p4\Customer::where($column, '=', $id)->get();

        return view('secure.dashboard')->with('customers', $customers);
    }

}

?>