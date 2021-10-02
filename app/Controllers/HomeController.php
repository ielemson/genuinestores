<?php

namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;

class HomeController extends BaseController
{
    

	private $db;

    public function __construct()
    {
        $this->db = db_connect(); // Loading database
        // OR $this->db = \Config\Database::connect();
    }



    public function index()
	{
		$data = [
			'title'=>':: Home'
		];

		// $productModel = new Product();
		
        // $data['products'] = $productModel->where('status', 1)->findAll();

		$categoryModel = new Category();
        // $data['categories'] = $categoryModel->orderBy('id', 'DESC')->findAll();
        $data['categories'] = $categoryModel->where('status', 1)->findAll();

  $builder = $this->db->table("products as product");
  $builder->select('product.*, category.name as cat_name');
  $builder->join('categories as category', 'product.cat_id = category.id');
  $data['products']= $builder->get()->getResultArray();

		return view('common/home',$data);
	}
}

