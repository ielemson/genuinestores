<?php

namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;
use Config\Services;
class HomeController extends BaseController
{
    

	private $db;

    public function __construct()
    {
        $this->db = db_connect(); // Loading database
        // OR $this->db = \Config\Database::connect();
        $this->session = Services::session();
    }



    public function index()
	{
		$data = [
			'title'=>':: Home',
            'user' => $this->session->user
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

		return view('home',$data);
	}


    public function contact(){

        $categoryModel = new Category();
        // $data['categories'] = $categoryModel->orderBy('id', 'DESC')->findAll();
        $data['categories'] = $categoryModel->where('status', 1)->findAll();

        return view('contact',$data);
    }

    public function about(){
        $categoryModel = new Category();
        // $data['categories'] = $categoryModel->orderBy('id', 'DESC')->findAll();
        $data['categories'] = $categoryModel->where('status', 1)->findAll();

        return view('about',$data);
    }
}

