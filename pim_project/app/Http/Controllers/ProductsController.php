<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\products;
use App\categories;


class ProductsController extends Controller
{

	public function display_product_by_categories(){

        $category = categories::all();
        $product = products::all();

        if (isset($_GET['category_choice'])) {

            $product=products::join('categories','id','=',$_GET['category_choice'])->get();
            return view('product', ['product' => $product]);
        }
    
        return view('product', 
            [ 
                'category' => $category,
                'product' => $product
            ]);
    }
}
