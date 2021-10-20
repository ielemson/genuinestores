<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Slider;

class SliderController extends BaseController
{

    public function __construct()
    {
        if (session()->get('role') != "admin") {
            echo 'Access denied';
            exit;
        }
    }

     public function index()
    {
        return view('admin/slider/create');
    }


    public function store(){

        helper(['form', 'url','text']);
		// save new user, validation happens in the model
		$sliderModel = new Slider();
		
        $slider1 = $this->request->getFile('slider1');
        $slider2 = $this->request->getFile('slider2');

        if($slider1->isValid() && !$slider1->hasMoved()) {

            $slider1Img = $slider1->getRandomName();

            $slider1->move('uploads/slider', $slider1Img);
        }

        if($slider2->isValid() && !$slider2->hasMoved()) {

            $slider2Img = $slider2->getRandomName();

            $slider2->move('uploads/slider', $slider2Img);
        }

        $sliderArr = [

            'slider1'          	=> $slider1Img,
            'slider2'          	=> $slider2Img,
        ];

        if ($sliderModel->save($sliderArr)) {
        

        return redirect()->to(base_url('admin/slider/create'))->with('success', "Slider Created Sucessfully");
        }
        return redirect()->to(base_url('admin/slider/create'))->withInput()->with('errors', $sliderModel->errors());
    }
}
