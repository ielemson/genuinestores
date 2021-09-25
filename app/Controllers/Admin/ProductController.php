<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public function createProduct()
    {
        return view('admin/product/create');
    }

    
    public function products()
    {
        return view('admin/product/products');
    }
}
