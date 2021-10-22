<?php

namespace App\Controllers\Web;

use App\Controllers\BaseController;
use App\Models\Product;
use App\Models\Category;
class CartController extends BaseController
{
    

    public function add_to_cart($id=null)
    {
        helper(['form', 'url']);

        $productModel = new Product();
        // Call the cart service
        $cart = \Config\Services::cart();
        $cart_data = [];  

        $quantity = 1;

        $data['product'] = $productModel->where('id', $id)->first();

            // // Insert an array of values
          $cart->insert(array(
             'id'      => $data['product']['id'],
             'qty'     => 1,
             'price'   => $data['product']['sprice'],
             'name'    => $data['product']['name'],
             'img'    => $data['product']['cover_img'],
             'desc'    => $data['product']['description'],
            //  'options' => array('Size' => 'L', 'Color' => 'Red')
          ));

          // Get the cart contents as an array
        $cart_content  = $cart->contents();

        $sumQTY = 0;

        foreach ($cart_content as $key => $content) {
        
            $sumQTY+=$content['qty'];
        }
        
        $cart_data['cartCount'] = $sumQTY;
        $cart_data['cartContent'] = $cart_content;
        
        // Clear the shopping cart
        // $cart->destroy();

        echo json_encode(array("status" => true , 'data' => $cart_data));

        // dd($cart_content);
    }

    public function cart(){

        $cart = \Config\Services::cart();
        $cart_content  = $cart->contents();

        $data = [
			'title'=>':: Cart'
		];
        $categoryModel = new Category();
      
        // $data['categories'] = $categoryModel->orderBy('id', 'DESC')->findAll();
        $data['categories'] = $categoryModel->where('status', 1)->findAll();

        // if (count($cart_content) > 0) {
            
        //     dd($cart_content);

        // }

        return view('cart',$data);
    }



    public function checkout(){

        $cart = \Config\Services::cart();
        $cart_content  = $cart->contents();

        return $cart_content;
    }



    public function remove($id=null){

        $cart = \Config\Services::cart();

        // Clear the shopping cart
       // Remove an item using its `rowid`
        
        if($cart->remove($id)){

            echo json_encode(array("status" => true));

        }else{
            
            echo json_encode(array("status" => false));
        }

        
        // try {

        //     $cart->remove($id);
        //     echo json_encode(array("status" => true,'cartdata'=>$data));
        // } catch (Exception $e) {

        //     // $erroData = 'and the error is: ',  $e->getMessage(), "\n";
        //     echo json_encode(array("status" => false,'cartdata'=>$e->getMessage()));
            
        // }

         
         
    }

    public function destroy(){
        $cart = \Config\Services::cart();
        // Clear the shopping cart
        $cart->destroy();
        return redirect()->to(base_url('cart'))->with('success', "Cart cleared Successfully");
    }
}
