<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function show(){
        $data = [ ];
        $data['products'] = Product::all();
        return view('backend.products.show', $data);
    }
    public function add(){
        return view('backend.products.add');
    }
    public function store(Request $request){
        // validation pore

        $products = new Product();
        $products->product_name = $request->product_name;
        $products->product_description = $request->product_description;
        $products->product_prize = $request->product_prize;
        $products->product_prize = $request->product_prize;
        $products->product_disscount_prize = $request->product_disscount_prize;
        $products->availability_date = $request->availability_date;
        $products->save();

        // return view('backend.products.add');
        session()->flash('success','Product Added Successfully!');
        return redirect(route('showProduct'));
    }
    


}
