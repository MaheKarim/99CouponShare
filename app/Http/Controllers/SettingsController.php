<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogoChange;
use App\Settings;

class SettingsController extends Controller
{
    // start code from here

    public function footerPartUpdate(){

        $data = [' '];
        $data['logochange'] = LogoChange::find(6);
        return \view('backend.settings.sent', $data);
    }

    public function update(Request $request){

        $settinga = Settings::find(1);
        $settinga->footer_text = $request->footer_text;
        $settinga->save();
        session()->flash('success','Create Created successfully!');

        return back();
    }

    // public function updatetext(Request $request, $id){
    //     $settinga = Settings::findOrfail($request)->first();
    //     $settinga->save();

    //     session()->flash('success','Successfully Updated!');
        
    //     return redirect()->back();
    // }
}
