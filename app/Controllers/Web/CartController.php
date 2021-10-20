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
        $data = [];  

        $quantity = 1;

        $data['product'] = $productModel->where('id', $id)->first();

            // // Insert an array of values
          $cart->insert(array(
             'id'      => 'sku_1234ABCD',
             'qty'     => 1,
             'price'   => '19.56',
             'name'    => 'T-Shirt',
             'options' => array('Size' => 'L', 'Color' => 'Red')
          ));

        echo json_encode(array("status" => true , 'data' => $prod_cart));
    }
}
