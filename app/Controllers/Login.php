<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $data =  [
			'title'         => 'Dashboard Page'
		];


        return view('common/login');
    }


   
}
