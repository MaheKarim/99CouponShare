<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Auth;
use App\Category;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //
    public function show(){
        if(Auth::user()->user_role_id == 1 ){
            $data['products'] = Product::all();
        }else{
            $data['products'] = Product::where('user_id', Auth::id())->get();
        } 
        return view('backend.products.show', $data);
    }

    public function add(){
        return view('backend.products.add');
    }

    public function store(Request $request){
        // Validation
        $request->validate([
            'product_name' => 'required|min:3',
            'product_prize' => 'required|numeric',
            'product_disscount_prize' => 'required',
            'availability_date' => 'required',
            'product_image' => 'required|image'
         ]);
        $image = '';
        if($request->has('product_image')){
            $image = $request->file('product_image')->store('product_images');
         }
        
        $products = new Product();
        $products->category_name_id = $request->category_name_id;
        $products->dokan_name_id = $request->dokan_name_id;
        $products->product_name = $request->product_name;
        $products->product_description = $request->product_description;
        $products->product_prize = $request->product_prize;
        $products->product_disscount_prize = $request->product_disscount_prize;
        $products->product_disscount_rate = $request->product_disscount_rate;
        $products->user_id = Auth::id();
        $products->availability_date = $request->availability_date;
        $products->product_image = $image;
        $products->save();

        // return view('backend.products.add');
        session()->flash('success','Product Added Successfully!');
        return redirect(route('showProduct'));
    }
    
    public function edit($id){
        $data = [ ];
        $data['products'] = Product::find($id);

        return view('backend.products.edit',$data);
    }

    public function update(Request $request){
        $request->validate([
            'product_name' => 'required',
            
         ]);
         // update work
         $products = Product::findOrfail($request)->first();
         $products->product_name = $request->product_name;
         $products->product_description = $request->product_description;
         $products->product_prize = $request->product_prize;
         $products->product_disscount_prize = $request->product_disscount_prize;
         $products->product_disscount_rate = $request->product_disscount_rate;
         $products->availability_date = $request->availability_date;
         $products->save();

         session()->flash('success','Successfully Updated!');
         return redirect(route('showProduct'));
    }

    public function delete($id){
        $products = Product::find($id);
        Storage::delete($products->product_image); 
        $products->delete();

        \session()->flash('success','Products Delete Successfully');
        return redirect(route('showProduct'));
    }


}
