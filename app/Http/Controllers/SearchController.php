<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\User;


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
        return view('frontend.search', compact('users'));
    }
}
