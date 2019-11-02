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
        $data['settinga'] = Settings::all();
        return \view('backend.settings.sent', $data);
    }

    public function update(Request $request){

        $settinga = Settings::find(1);
        $settinga->footer_text = $request->footer_text;
        $settinga->site_mail = $request->site_mail;
        $settinga->site_phn_number = $request->site_phn_number;
        $settinga->save();
        session()->flash('success','Settings Updated Successfully! ');

        return back();
    }

}
