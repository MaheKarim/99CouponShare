<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokanController extends Controller
{
    public function show(){
        return view('backend.dokan.show');
    }
}
