<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;
use Illuminate\Http\Request;

class createProfileController extends Controller {

    /**
    * 
    */
    public function getCreateProfilePage() {
        return view('auth.register');
    }


    public function postCreateProfilePage(Request $request) {


    }

}

?>