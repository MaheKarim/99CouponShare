<?php

namespace App\Http\Controllers;

use App\Dokan;
use App\LogoChange;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public function index(){

        $data = [ ];
        $data['logochange'] = LogoChange::all();
        $data['dokans'] = Dokan::where('dokan_image')->get();
        return view('frontend.welcome', $data);
    }

    public function contactus(){
        $data = [ ];
        $data['logochange'] = LogoChange::all();
        return view('frontend.contact',$data);
    }
}
