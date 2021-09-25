<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class CategoryController extends BaseController
{
    public function createCategory()
    {
        return view('admin/category/create');
    }

    
    public function categories()
    {
        return view('admin/category/categories');
    }
}
