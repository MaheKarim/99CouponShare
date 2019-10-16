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

    public function imageUploadPost(){
        // $request->validate([
        //     'logo' => 'required|max:3048',
        //  ]);

        // $image = '';
        //  if($request->has('logo')){
        //      $image = $request->file('logo')->store('logo');
        //  }
        //  $logochange = new LogoChange();
        //  $logochange->logo = $image;
        //  return $image;
        //  session()->flash('success','Logo Created successfully!');
        //  return redirect(route('logoChange'));

    //     request()->validate([

    //         'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    //     ]);

  

    //   //  $logo = time().'.'.request()->image->getClientOriginalExtension();

  

    //     request()->image->move(public_path('logo'), $logo);

  

        return back()

            ->with('success','You have successfully upload image.')

            ->with('image',$logo);

    }
    
}
