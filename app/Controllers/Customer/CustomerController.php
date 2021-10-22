<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use Config\Services;
use App\Models\Order;
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
        // dd($cart_content);
        $order_no = mt_rand(0,123456);
    
    foreach($cart->contents() as $order){

        $orderModel =  new Order();

    $orderArr = [
        'user_id'          	=> session()->id,  // get current user id
        'product_id'          	=> $order['id'],
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
