<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller {

    /**
    * Responds to requests to GET /user
    */
    public function getLoginPage() {
        return view('login');
    }


    public function postLoginPage(Request $request) {


    }

}

?>