<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Order;

class AdminController extends BaseController
{

    public function __construct()
    {
        if (session()->get('role') != "admin") {
            echo 'Access denied';
            exit;
        }
    }
    
    public function dashboard()
    {
        $orderModel = new Order();
        $data['new_orders'] = $orderModel->where('status', 0)->countAllResults();
        $data['pending_orders'] = $orderModel->where('status', 1)->countAllResults();
        $data['completed_orders'] = $orderModel->where('status', 2)->countAllResults();
        return view('admin/dashboard',$data);
    }

  
}
