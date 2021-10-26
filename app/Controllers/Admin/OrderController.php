<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Order;
use App\Models\Users;

class OrderController extends BaseController
{

    // PENDING ORDERS
    public function new()
    {
        $orderModel = new Order();
        $data['orders'] = $orderModel->where('status', 0)->orderBy("id", "DESC")->findAll();
        // dd($orders);

        $data['new_orders'] = $orderModel->where('status', 0)->countAllResults();
        $data['pending_orders'] = $orderModel->where('status', 1)->countAllResults();
        $data['completed_orders'] = $orderModel->where('status', 2)->countAllResults();

        return view('admin/orders/new',$data);
    }

    // PENDING ORDERS
    public function pending()
    {
        $orderModel = new Order();
        
        $data['orders'] = $orderModel->where('status', 1)->orderBy("id", "DESC")->findAll();
        $data['new_orders'] = $orderModel->where('status', 0)->countAllResults();
        $data['pending_orders'] = $orderModel->where('status', 1)->countAllResults();
        $data['completed_orders'] = $orderModel->where('status', 2)->countAllResults();

        return view('admin/orders/pending',$data);
    }


    // COMPLETED ORDERS
    public function completed()
    {
        $orderModel = new Order();
        $data['orders'] = $orderModel->where('status', 2)->findAll();
        $data['new_orders'] = $orderModel->where('status', 0)->countAllResults();
        $data['pending_orders'] = $orderModel->where('status', 1)->countAllResults();
        $data['completed_orders'] = $orderModel->where('status', 2)->countAllResults();
        return view('admin/orders/completed',$data);
        // dd($orders);
    }

    public function approve($id=null){

        $orderModel = new Order();
        $userModel = new Users();

        $data['order'] = $orderModel->where('order_no', $id)->first();
        $data['user'] = $userModel->where('id', $data['order']['user_id'])->first();
        $data['orders'] = $orderModel->where('user_id', $data['user']['id'])->where('status', 0)->findAll();

        // order array
        $data['new_orders'] = $orderModel->where('status', 0)->countAllResults();
        $data['pending_orders'] = $orderModel->where('status', 1)->countAllResults();
        $data['completed_orders'] = $orderModel->where('status', 2)->countAllResults();
        // dd($data);
       return view('admin/orders/approve',$data);
        
    }

    public function approval($id=null){

        $orderModel = new Order();
        $userModel = new Users();

        // $data['order'] = $orderModel->where('order_no', $id)->first();
        // $data['user'] = $userModel->where('id', $data['order']['user_id'])->first();
        $data['orders_approve'] = $orderModel->where('user_id', $id)->where('status', 0)->findAll();

        foreach ($data['orders_approve'] as $key => $value) {
     
        $orderModel->where('user_id', $id)->where('status',0)->set('status', 1)->update();
        }

        $data['orders'] = $orderModel->where('status', 0)->orderBy("id", "DESC")->findAll();
        $data['success'] = 1;

        // order array
        $data['new_orders'] = $orderModel->where('status', 0)->countAllResults();
        $data['pending_orders'] = $orderModel->where('status', 1)->countAllResults();
        $data['completed_orders'] = $orderModel->where('status', 2)->countAllResults();
        // dd($data);
       return view('admin/orders/pending',$data);
        
    }
}
