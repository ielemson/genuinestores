<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Order;

class CategoryController extends BaseController
{

    public function __construct()
    {
        if (session()->get('role') != "admin") {
            echo 'Access denied';
            exit;
        }
    }

    
    public function createCategory()
    {
        $orderModel = new Order();

         // order array
         $data['new_orders'] = $orderModel->where('status', 0)->countAllResults();
         $data['pending_orders'] = $orderModel->where('status', 1)->countAllResults();
         $data['completed_orders'] = $orderModel->where('status', 2)->countAllResults();

        return view('admin/category/create',$data);
    }

    
    //List all categories
    public function categories()
    {

        $categoryModel = new Category();
        $orderModel = new Order();
        // $data['categories'] = $categoryModel->orderBy('id', 'DESC')->findAll();
        $data['categories'] = $categoryModel->where('status', 1)->findAll();
         // order array
         $data['new_orders'] = $orderModel->where('status', 0)->countAllResults();
         $data['pending_orders'] = $orderModel->where('status', 1)->countAllResults();
         $data['completed_orders'] = $orderModel->where('status', 2)->countAllResults();

        return view('admin/category/categories',$data);
    }


    // Store Category
    public function storeCategory()
{
    
    $model = new Category();

    if ($this->request->getMethod() === 'post' && $this->validate([
        'name' => 'required|min_length[3]|max_length[255]',
        'status'  => 'required',
    ])) {
        $model->save([
            'name' => $this->request->getPost('name'),
            'slug'  => url_title($this->request->getPost('name'), '-', true),
            'status'  => $this->request->getPost('status'),
        ]);

        return redirect()->to(base_url('admin/categories'))->with('success', "Category Created");


    } else {
        return redirect()->to(base_url('admin/category/create'))->with('error', "Error Creating Category");
    }


}


    //Edit Category
    public function edit($id=null){

        $categoryModel = new Category();
        $orderModel = new Order();
        $data['category'] = $categoryModel->where('id', $id)->first();

         // order array
         $data['new_orders'] = $orderModel->where('status', 0)->countAllResults();
         $data['pending_orders'] = $orderModel->where('status', 1)->countAllResults();
         $data['completed_orders'] = $orderModel->where('status', 2)->countAllResults();
        return view('admin/category/category',$data);
    }
}
