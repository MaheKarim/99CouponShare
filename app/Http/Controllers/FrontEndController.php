<?php

namespace App\Http\Controllers;

use App\Dokan;
use App\LogoChange;
use App\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public function index(){

        $data = [ ];
        $data['logochange'] = LogoChange::all();
        $data['dokans'] = Dokan::all();
        $data['products'] = Product::all();

        return view('frontend.welcome', $data);
    }

    public function contactus(){
        $data = [ ];
        $data['logochange'] = LogoChange::all();
        return view('frontend.contact',$data);
    }
}
