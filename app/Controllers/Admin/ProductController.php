<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
class ProductController extends BaseController
{


    private $db;

    public function __construct()
    {
        $this->db = db_connect(); // Loading database
        // OR $this->db = \Config\Database::connect();

        if (session()->get('role') != "admin") {
            echo 'Access denied';
            exit;
        }
    }

    


    public function createProduct()
    {
        $categoryModel = new Category();
        // $data['categories'] = $categoryModel->orderBy('id', 'DESC')->findAll();
        $data['categories'] = $categoryModel->where('status', 1)->findAll();
        
        return view('admin/product/create',$data);
    }

    
    public function products()
    {
        $productModel = new Product();
        $data['products'] = $productModel->where('status', 1)->findAll();

    //     $data['products'] = $productModel->select('*')
    // ->join('images','prod_id = products.id')
    // ->get();

    // dd($data);
    // $database = \Config\Database::connect();
    // $db = $database->table('users');


    // $builder = $database->table('products');
    // $builder->select('*');
    // $builder->join('images', 'images.prod_id = products.id');
    //  $data['products'] = $builder->get()->getResult();

    //  dd($query);
    // print_r($data);
        // return view('admin/product/products',$data);



//   $builder = $this->db->table("products as product");
//   $builder->select('product.*, image.name as img_name');
//   $builder->join('images as image', 'product.id = image.prod_id');
//   $data['products']= $builder->get()->getResultArray();
     return view('admin/product/products',$data);

        
    }

    public function storeProduct()
    {
        
        $model = new Product();

        if ($this->request->getMethod() === 'post' && $this->validate([

        'name' => 'required|min_length[3]|max_length[255]',
        'price' => 'required|min_length[3]|max_length[255]',
        'description' => 'required|min_length[3]|max_length[255]',
        'status'  => 'required',
        'cat_id'  => 'required',
        
        ])) {

        $model->save([
        'name' => $this->request->getPost('name'),
        'price' => $this->request->getPost('price'),
        // 'image' => $this->request->getPost('image'),
        'cat_id' => $this->request->getPost('cat_id'),
        'description' => $this->request->getPost('description'),
        'slug'  => url_title($this->request->getPost('name'), '-', true),
        'status'  => $this->request->getPost('status'),
        ]);

        return redirect()->to(base_url('dashboard/products'))->with('success', "Product Created");

        } else {

        // return redirect()->to(base_url('dashboard/product/create'))->with('error', "Error Creating Product");
        return redirect()->back()->withInput()->with('errors', $users->errors());
        }
    
    
    }


    public function store(){

        // helper('text');

        helper(['form', 'url','text']);

		// save new user, validation happens in the model
		$product = new Product();
		$getRule = $product->getRule('storeProducts');
		$product->setValidationRules($getRule);
		
        $file = $this->request->getFile('cover');
        if($file->isValid() && !$file->hasMoved()) {
            $coverImg = $file->getRandomName();
            $file->move('uploads/product', $coverImg);
        }

        $productArr = [
            'name'          	=> $this->request->getPost('name'),
            'title'          	=> $this->request->getPost('title'),
            'cover_img'          	=> $coverImg,
            'cprice'          	=> $this->request->getPost('cprice'),
            'sprice'          	=> $this->request->getPost('sprice'),
            'qty'              	=> $this->request->getPost('qty'),
            'description'       => $this->request->getPost('description'),
            'status'         	=> $this->request->getPost('status'),
            'cat_id'         	=> $this->request->getPost('cat_id'),
            'slug'  => url_title($this->request->getPost('name'), '-', true),
           
        ];

        // dd($productArr);

        if ($product->save($productArr)) {


        if ( $this->request->getFileMultiple('image')) {
          
            $files = $this->request->getFileMultiple('image');

            foreach($files as $file) {
                if($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $file->move('uploads/product', $newName);
        
                    $image = new ProductImage;
                    $image->save([
                        'name' => $newName,
                        'prod_id' =>  $product->insertID(),
                        'type' =>  $file->getClientMimeType()
                    ]);
        
                    // array_push($filePreviewName, $newName);
                }           
            }
        }
            
       
		return redirect()->to(base_url('admin/products'))->with('success', "Product Created Sucessfully");
        }
        return redirect()->to(base_url('admin/product/create'))->withInput()->with('errors', $product->errors());
        
    }


    public function edit($id=null){

        $productModel = new Product();
        $categoryModel = new Category();

        $data['product'] = $productModel->where('id', $id)->first();
        $data['categories'] = $categoryModel->where('status', 1)->findAll();

        return view('admin/product/edit',$data);

    }
}
