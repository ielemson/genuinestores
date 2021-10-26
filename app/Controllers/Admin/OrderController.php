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
        $newOrder['orders'] = $orderModel->where('status', 0)->orderBy("id", "DESC")->findAll();
        // dd($orders);
        return view('admin/orders/pending',$newOrder);
    }

    // PENDING ORDERS
    public function pending()
    {
        $orderModel = new Order();
        $pendingOrder['orders'] = $orderModel->where('status', 1)->orderBy("id", "DESC")->findAll();
        // dd($orders);
        return view('admin/orders/pending',$pendingOrder);
    }


    // COMPLETED ORDERS
    public function completed()
    {
        $orderModel = new Order();
        $completedOrders['orders'] = $orderModel->where('status', 2)->findAll();
        return view('admin/orders/completed',$completedOrders);
        // dd($orders);
    }

    public function approve($id=null){

        $orderModel = new Order();
        $userModel = new Users();

        $data['order'] = $orderModel->where('order_no', $id)->first();
        $data['user'] = $userModel->where('id', $data['order']['user_id'])->first();
        $data['orders'] = $orderModel->where('user_id', $data['user']['id'])->where('status', 0)->findAll();
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

        $getArr['orders'] = $orderModel->where('status', 0)->orderBy("id", "DESC")->findAll();
        $getArr['success'] = 1;
        // dd($data);
       return view('admin/orders/pending',$getArr);
        
    }
}
