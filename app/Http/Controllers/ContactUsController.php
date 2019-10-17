<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        $data = [ ];
        $data['logochange'] = LogoChange::all();
        return view('backend.contact.shhow',$data);
    }
}
