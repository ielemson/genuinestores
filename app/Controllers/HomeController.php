<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    
    public function index()
	{
		$data = [
			'title'=>'Dashboard Page'
		];
		return view('common/home',$data);
	}
}

