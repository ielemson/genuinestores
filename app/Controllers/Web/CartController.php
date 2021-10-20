<?php

namespace App\Controllers\Web;

use App\Controllers\BaseController;
use App\Models\Product;

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
}
