<?php

namespace App\Controllers\Web;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\Product;
use App\Models\Order;

class ProductController extends BaseController
{
    public function product($slug=null)
    {
        print_r(current_url());
        $data = [
			'title'=>':: Product'
		];
        $categoryModel = new Category();
        $productImage = new ProductImage();
        $productModel = new Product();
        $orderModel = new Order();
        // $data['categories'] = $categoryModel->orderBy('id', 'DESC')->findAll();
        $data['categories'] = $categoryModel->where('status', 1)->findAll();
        $data['product'] = $productModel->where('slug', $slug)->first();
        $data['images'] = $productImage->where('prod_id', $data['product']['id'])->findAll();
        $data['prod_orders'] = $orderModel->where('product_id', $data['product']['id'])->where('status',1)->countAllResults();
        $data['prod_cat'] = $categoryModel->where('id', $data['product']['cat_id'])->first();
        // dd($data);

        return view('product',$data);
    }



}
