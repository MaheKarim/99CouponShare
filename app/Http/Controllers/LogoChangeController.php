<?php

namespace App\Http\Controllers;

use App\LogoChange;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoChangeController extends Controller
{
    public  function  index(){
        $data = [ ];
        $data['logochanges'] = LogoChange::all();
        // $data['logochange'] = LogoChange::first();
        return view('backend.logo', $data);
    }

    public function imageUploadPost(Request $request){
        $request->validate([
            'logo' => 'required|max:3048'
         ]);

        $image = '';
         if($request->has('logo')){
             $image = $request->file('logo')->store('logo');
         }
         $logochange = new LogoChange();
         $logochange->logo = $image;
         $logochange->save();
         session()->flash('success','Logo Created successfully!');
         return redirect(route('logoChange'));

        }
}
