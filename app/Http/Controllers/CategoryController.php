<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Dokan;
use App\LogoChange;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class CategoryController extends Controller
{
    public function index(){
        $data = [ ];
        $data['logochange'] = LogoChange::find(6);
        return view('backend.category.add', $data);
    }

    public function store(Request $request){
         //  validation start here
         $request->validate([
            'category_name' => 'required|min:3|max:120',
         ]);
         //  data insert
         $categories = new Category();
         $categories->category_name = $request->category_name;
         $categories->category_description = $request->category_description;
         $categories->save();
         // flash message 


         session()->flash('success','Category Created Successfully!');
         return redirect(route('showCategory'));
    }

    public function show(){
        $data = [ ];
        $data['categories'] = Category::paginate(5);
        $data['logochange'] = LogoChange::find(6);

        return view('backend.category.show', $data);
    }
    public function edit($categoryId){
        $data = [ ];
        $data['categories'] = Category::find($categoryId);

        return view('backend.category.edit', $data);
    }

    public function update(Request $request){
        // validation
        $request->validate([
            'category_name' => 'required|min:3',
         ]);
         // update work

         $categories = Category::findOrfail($request)->first();
         $categories->category_name = $request->category_name;
         $categories->category_description = $request->category_description;
         $categories->save();

         session()->flash('success','Successfully Updated!');
         return redirect(route('showCategory'));
    }

    public function delete($id){

        if($id == 1){
            session()->flash('success','Category != Deleted Successfully');
            return redirect(route('showCategory')); 
        }
        $products = Product::where('category_name_id', $id)->get();
        foreach ($products as $product) {
            Product::find($product->id)->update([
                'category_name_id' => 1
            ]);
        }

        $categories = Category::find($id);
        $categories->delete();

        session()->flash('success','Category Deleted Successfully!');
        return redirect(route('showCategory'));
    }
    
}
