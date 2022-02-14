<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use Session;
use App\Models\Rack;

class StockController extends Controller
{
    public function productdetail($id){
        $products=Product::all()->where('id',$id);
        (new CartController)->cartItem(); 
        return view('productDetail')->with('products',$products);
    }

    public function viewProduct(){

        $products=Product::all();
        (new CartController)->cartItem(); // call cartController function
        //App('App\Http\Controllers\CartController')->cartItem();
        return view('viewProduct')->with('products',$products);
    }

    
}
