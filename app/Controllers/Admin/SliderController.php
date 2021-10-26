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
        $sliderModel = new Slider();

        $data['sliders'] = $sliderModel->findAll();

        return view('admin/slider/create',$data);

    }


    public function store(){

        helper(['form', 'url','text']);
		// save new user, validation happens in the model
		$sliderModel = new Slider();
		
        $slider = $this->request->getFile('slider');
        // $slider2 = $this->request->getFile('slider2');

        if($slider->isValid()) {

            $slider1Img = $slider->getRandomName();

            $slider->move('images/banner', $slider1Img);
        }

        // if($slider2->isValid() && !$slider2->hasMoved()) {

        //     $slider2Img = $slider2->getRandomName();

        //     $slider2->move('images/banner', $slider2Img);
        // }

        $sliderArr = [

            'slider'          	=> $slider1Img,
        ];

        if ($sliderModel->save($sliderArr)) {
        

        return redirect()->to(base_url('admin/slider/create'))->with('success', "Slider Created Sucessfully");
        }
        return redirect()->to(base_url('admin/slider/create'))->withInput()->with('errors', $sliderModel->errors());
    }

    public function destroy($id=null){

        $sliderModel = new Slider();
        $slider =  $sliderModel->where('id', $id)->first();
        $sliderDelete =  $sliderModel->where('id', $id);
        
        if($slider) { 
        unlink('./images/banner/'.$slider['slider']);
        $sliderDelete->delete();
        return redirect()->to(base_url('admin/slider/create'))->with('success', "Slider Deleted Sucessfully");
        }
        return redirect()->to(base_url('admin/slider/create'))->withInput()->with('errors', $sliderModel->errors());
    }
}
