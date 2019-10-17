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
        $data['logochange'] = LogoChange::get();
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
        public function delete($id){
            $logochange = LogoChange::find($id);
            Storage::delete($logochange->logo);
            $logochange->delete();
    
            session()->flash('success','Image Deleted Successfully!');
            return redirect(route('logoChange'));
        }
}
