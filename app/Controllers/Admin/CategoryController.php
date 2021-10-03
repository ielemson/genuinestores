<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Category;

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
        return view('admin/category/create');
    }

    
    //List all categories
    public function categories()
    {

        $categoryModel = new Category();
        // $data['categories'] = $categoryModel->orderBy('id', 'DESC')->findAll();
        $data['categories'] = $categoryModel->where('status', 1)->findAll();
        
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

        return redirect()->to(base_url('dashboard/categories'))->with('success', "Category Created");


    } else {
        return redirect()->to(base_url('dashboard/category/create'))->with('error', "Error Creating Category");
    }


}


    //Edit Category
    public function edit($id=null){

        $categoryModel = new Category();
        $data['category'] = $categoryModel->where('id', $id)->first();
        return view('admin/category/category',$data);
    }
}
