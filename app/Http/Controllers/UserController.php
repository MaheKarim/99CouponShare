<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    public function index(){

        $data = [ ];
        $data['users'] = User::all();
        return view('backend.user.myprofile', $data);
    }
}
