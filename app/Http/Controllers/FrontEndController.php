<?php

namespace App\Http\Controllers;

use App\Category;
use App\Dokan;
use App\LogoChange;
use App\Product;
use App\ContactUs;
use Illuminate\Http\Request;
use Artisan;

class FrontEndController extends Controller
{
    // artisan command

    public function install(){
        Artisan::call('storage:link');
        return 'Storage Link Storage Succssfully!';
    }
    public function up(){
        Artisan::call('down');
        return 'Site Has Been Down Succssfully!';
    }
    public function down(){
        Artisan::call('up');
        return 'Site Has Been Up Succssfully!';
    }

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
         $data['logochange'] = LogoChange::all();
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

    public function aboutus(){

        $data=[' '];
        $data['logochange'] = LogoChange::all();
        
        return view('frontend.about-us', $data);
    }

    public function contactwithus(){

        $data = [' '];
        $data['logochange'] = LogoChange::all();
        
        return view('frontend.contactwith', $data);
    }

    public function allcategoryshow($id){
        $data = [' '];
        $data['logochange'] = LogoChange::all();
        $data['products'] = Product::where('category_name_id', $id)->get();
        
        return view('frontend.categorywise', $data);
    }

    public function showAreaProducts($id){
        $data = [' '];
        $data['logochange'] = LogoChange::all();
        $data['products'] = Product::where('area_name_id', $id)->get();

        return view('frontend.areawise', $data);
    }

    public function allProductsShow(){
        $data = [' '];
        $data['logochange'] = LogoChange::all();
        $data['products'] = Product::all();

        return view('frontend.view_all_products', $data);
    }

}
