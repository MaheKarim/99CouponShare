<?php

namespace App\Http\Controllers;

use App\NewsLater;
use App\LogoChange;
use Illuminate\Http\Request;

class NewsLaterController extends Controller
{
    public function show(){
        $data= [ ];
        $data['newslaters'] = NewsLater::all();
        $data['logochange'] = LogoChange::all();
        return view('backend.newslater.show',$data);
    }
    public function sent(Request $request){
        $request->validate([
            'mail' => 'required|email',
         ]);
         //  data insert
         $newslaters = new NewsLater();
         $newslaters->mail = $request->mail;
         
         $newslaters->save();
         // flash message 
         session()->flash('success','Subscribe Successfully!');
         return redirect('/');
    }

    public function delete($id){
        $newslaters = NewsLater::find($id);
        $newslaters->delete();

        session()->flash('success','Subscriber Mail Deleted Successfully!');
        return redirect(route('showMailSubscribe'));
    }
}
