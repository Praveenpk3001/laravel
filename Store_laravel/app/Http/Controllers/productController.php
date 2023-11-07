<?php

namespace App\Http\Controllers;
use App\Models\product;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        return view('product.product');
    }

  
    public function save(Request $request){
        $product = new product();
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->save();
        return back();

    }
    
    public function all(){
        $product = product::get();
        return view('product.sales',compact('product'));
    }

}
