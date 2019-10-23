<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\LogoChange;
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
         $areas = new Category();
         $areas->category_name = $request->category_name;
         $areas->save();
         // flash message 
         session()->flash('success','Category Created successfully!');
         return redirect(route('showCategory'));
    }

    public function show(){
        $data = [ ];
        $data['categories'] = Category::all();
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
         $categories->save();

         session()->flash('success','Successfully Updated!');
         return redirect(route('showCategory'));
    }

    public function delete($id){
        $categories = Category::find($id);
        $categories->delete();

        session()->flash('success','Category Deleted Successfully!');
        return redirect(route('showCategory'));
    }
    
}
