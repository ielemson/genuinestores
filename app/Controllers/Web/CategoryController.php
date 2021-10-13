<?php

namespace App\Controllers\Web;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\Product;

class CategoryController extends BaseController
{
    public function category($slug=null)
    {
       
        $data = [
			'title'=>':: Product'
		];
        $categoryModel = new Category();
        $productImage = new ProductImage();
        $productModel = new Product();
        $data['prodCat'] = $categoryModel->where('slug', $slug)->first();
        $data['categories'] = $categoryModel->where('status', 1)->findAll();
        // dd($data['category']['id']);

        $data['products'] = $productModel->where('cat_id', $data['prodCat']['id'])->findAll();

        // dd($data);

        // $data['images'] = $productImage->where('prod_id', $data['product']['id'])->findAll();
        return view('category',$data);
    }
}
