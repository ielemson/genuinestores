<?php

namespace App\Controllers\Web;

use App\Controllers\BaseController;
use App\Models\Category;

class ProductController extends BaseController
{
    public function product($slug=null)
    {
        $data = [
			'title'=>':: Product'
		];
        $categoryModel = new Category();
        // $data['categories'] = $categoryModel->orderBy('id', 'DESC')->findAll();
        $data['categories'] = $categoryModel->where('status', 1)->findAll();

        return view('common/pages/product',$data);
    }
}
