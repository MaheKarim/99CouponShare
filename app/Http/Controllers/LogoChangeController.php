<?php

namespace App\Http\Controllers;

use App\LogoChange;
use Illuminate\Http\Request;

class LogoChangeController extends Controller
{
    public  function  index(){
        // $data = [ ];
        // $data['logochanges'] = LogoChange::all();
        // $data['logochange'] = LogoChange::first();
        return view('backend.logo');
    }

    public function update(Request $request){

        // $logochange = LogoChange::find($id);

        // $requestData = $request->except(['logo']);
        // $logo = $request->logo;

        // if ($logo){
        //     $imageName = time().'.'.$logo->getClientOriginalName();
        //     $logo->move('logo', $imageName);
        //     $requestData['logo'] = $imageName;
        // }
        // $logochange->update($requestData);
        // return redirect()->back();

      //  $path = $request->file('image')->store('images');
      //  dd($path);
    }
}
