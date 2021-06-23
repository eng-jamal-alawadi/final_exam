<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class productController extends Controller
{

    public function index(){
        // $products = product::where('user_id', Auth::user()->id)->get();
        $products = product::all();
      return view('layout.app' , compact('products'));
   }

   public function create(){


    return redirect('store');
   }
    public function store(Request $request){

    $categories = new category;
    $categories->categoy = $request->category;

    $categories ->save();
    return redirect('/');
   }



   public function all_categories(){

    $categories = category::all();
  return view('all_categories' , compact('categories'));
}
public function all_products(){

    $products = product::all();
  return view('all_products' , compact('products'));
}
public function order(){

    $orders = order::all();
  return view('order' , compact('orders'));
}

public function create_product(Request $request){

    $products = new product;

    $products->category = $request->category;
    $products->product_name = $request->product_name;
    $products->price = $request->product_price;
    $products->quantity = $request->product_qty;

    $products ->save();
    return redirect('all_products');
   }


}
