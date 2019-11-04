<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\User;
//use App\Settinga;
//use App\Http\Controllers\Settinga;
use App\Settings;


class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
    	if($request->has('search')){
    		$users = User::search($request->get('search'))->get();	
    	}else{
    		$users = User::get();
        }
        // $data = [ ];
        $settinga = Settings::all();
        return view('frontend.search', compact('users', 'settinga'));
    }

    // product search
    public function product_search(Request $request){
        $products = Product::where('product_name', 'like', "%" . $request->search . "%")->get();
        $settinga = Settings::all();
        return view('frontend._inc.search_product', compact('products','settinga'));
    }
}
