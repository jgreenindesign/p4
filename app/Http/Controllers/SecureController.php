<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;
use Illuminate\Http\Request;

class secureController extends Controller {

    /**
    * 
    */
    public function getProfilePage() {
        return view('secure.profile');
    }

    public function getCreateCustomerPage() {
        return view('secure.create-customer');
    }   

    public function getCustomersPage() {
        return view('secure.customers');
    }

    public function getSalesPage() {
        return view('secure.sales');
    }

    public function getDashboardPage() {
        return view('secure.dashboard');
    }

}

?>