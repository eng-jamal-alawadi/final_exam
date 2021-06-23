<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
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
    return redirect('/',compact('categories'));
   }



   public function all_categories(){

    $categories = category::all();
  return view('all_categories' , compact('categories'));
}


}
