<?php

namespace App\Http\Controllers;

use App\Category;
use App\Dokan;
use App\LogoChange;
use App\Product;
use App\ContactUs;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public function index(){

        $data = [ ];
        $data['logochange'] = LogoChange::all();
        $data['dokans'] = Dokan::all();
        $data['products'] = Product::all();
        $data['categories'] = Category::all();

        return view('frontend.welcome', $data);
    }

    public function contactus(){
        $data = [ ];
        // $data['logochange'] = LogoChange::all();
        // $data['logochanges'] = LogoChange::all();
        return view('frontend.contact',$data);
    }

    public function allcoupon(){
        $data = [ ];
        $data['logochange'] = LogoChange::all();
        $data['dokans'] = Dokan::all();
        $data['products'] = Product::all();

        return view('frontend.alldelas', $data);  
    }

    public function showHome($id){
        $data = [' '];
        $data['products_cat'] = Product::where('category_name_id', $id)->get();

         return view('frontend._inc.allproducts', $data);
    }

}
