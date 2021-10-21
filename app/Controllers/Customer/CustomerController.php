<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use Config\Services;
class CustomerController extends BaseController
{
    public function __construct()
    {
        // start session
		$this->session = Services::session();

        // if (session()->get('role') != "customer") {
        //     echo 'Access denied';
        //     exit;
        // }
    }



    public function dashboard()
    {
        
        return view('customer/dashboard', [
            'user' => $this->session->user, 
        ]);
    }

    public function checkout(){

        $cart = \Config\Services::cart();
        $cart_content  = $cart->contents();

        return $cart_content;
    }
}
