<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;
class Login extends BaseController
{

    
    public function __construct()
    {
   
        $this->session = Services::session();
    }
    public function index()
    {
        $data =  [
			'title' => ':: Login',
            'user' => $this->session->user
            
		];


        // return view('common/login',$data);
    }


   
}
