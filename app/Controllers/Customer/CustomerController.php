<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use Config\Services;
use App\Models\Order;
use App\Models\Users;

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
        $orderModel = new Order();
        $data['orders'] = $orderModel->where('user_id', $this->session->id)->findAll();
        // $data['user'] =$this->session->id;
        // dd($data);
        return view('customer/dashboard', $data);
    }

    public function setting(){

        $orderModel = new Order();
        $userModel = new Users();
        $data['user'] = $userModel->where('id', $this->session->id)->first();
        $data['orders'] = $orderModel->where('user_id', $this->session->id)->findAll();
        return view('customer/setting',$data);
    }


    public function orders(){

        $orderModel = new Order();
        $data['orders'] = $orderModel->where('user_id', $this->session->id)->findAll();
        $userModel = new Users();
        $data['user'] = $userModel->where('id', $this->session->id)->first();
        // $data['user'] =$this->session->id;
        // dd($data);
        return view('customer/order', $data);
    }

    public function checkout(){

        $cart = \Config\Services::cart();
        $cart_content  = $cart->contents();
       
    
    foreach($cart->contents() as $order){

         // dd($cart_content);
         $order_no = mt_rand(0,123456);
         
        $orderModel =  new Order();

    $orderArr = [
        'user_id'          	=> session()->id,  // get current user id
        'product_id'          	=> $order['id'],
        'product_name'          	=> $order['name'],
        'img'          	=> $order['img'],
        'price'          	=> $order['price'],
        'qty'          	=> $order['qty'],
        'order_no'          	=> 'genuinestore_'.$order_no,
        'status'          	=> 0,
    ];

    $orderModel->save($orderArr);

    }
    $cart->destroy();
    return redirect()->to(base_url('customer/dashboard'))->with('success', "Your order has been recieved");
    }
}
