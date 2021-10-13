<?php

namespace App\Controllers\Web;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\Product;

class ProductController extends BaseController
{
    public function product($slug=null)
    {
        $data = [
			'title'=>':: Product'
		];
        $categoryModel = new Category();
        $productImage = new ProductImage();
        $productModel = new Product();
        // $data['categories'] = $categoryModel->orderBy('id', 'DESC')->findAll();
        $data['categories'] = $categoryModel->where('status', 1)->findAll();
        $data['product'] = $productModel->where('slug', $slug)->first();
        $data['images'] = $productImage->where('prod_id', $data['product']['id'])->findAll();
        $data['prod_cat'] = $categoryModel->where('id', $data['product']['cat_id'])->first();
        // dd($data);

        return view('product',$data);
    }
}
