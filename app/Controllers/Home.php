<?php

namespace App\Controllers;

class Home extends BaseController
{
    
    public function index()
	{
		$data = [
			'title'=>'Dashboard Page'
		];
		return view('common/home',$data);
	}
}

