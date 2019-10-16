<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokan;
use Auth;
use App\LogoChange;
use Illuminate\Support\Facades\Storage;

class DokanController extends Controller
{
    public function show(){
        if(Auth::user()->user_role_id == 1 ){
            $data['dokans'] = Dokan::all();
        }else{
            $data['dokans'] = Dokan::where('user_id', Auth::id())->get();
        } 
        $data['logochange'] = LogoChange::all();
        return view('backend.dokan.show',$data);
    }

    public function index(){
        $data = [ ];
        $data['logochange'] = LogoChange::all();
        return view('backend.dokan.add', $data);
    }
    public function store(Request $request){
         //  validation start here
         $request->validate([
            'dokan_name' => 'required|min:3|max:120',
         ]);
         


         // exists validation
        //  if(Dokan::where('user_id', auth::id())->exists()){
        //     session()->flash('success','Sorry! You have already created a Doakn.');
        //     return redirect(route('showDokan')); 
        //  }
         if(Dokan::where('user_id', auth::id())->count() > 3 ){ 
            session()->flash('error','Sorry! You have already created a Doakn.');
            return redirect(route('showDokan')); 
         } 
         // image insert

         $image = '';
         if($request->has('dokan_image')){
             $image = $request->file('dokan_image')->store('dokan_images');
         }

         //  data insert
         $dokans = new Dokan();
         $dokans->dokan_name = $request->dokan_name;
         $dokans->dokan_description = $request->dokan_description;
         $dokans->user_id = Auth::id();
         $dokans->dokan_image = $image;
         $dokans->save();
         // flash message 
         session()->flash('success','Dokan Created successfully!');
         return redirect(route('showDokan'));
    }


    public function edit($id){
        $data = [ ];
        $data['dokans'] = Dokan::find($id);

        return view('backend.dokan.edit', $data);
    }

    public function update(Request $request){
        $request->validate([
            'dokan_name' => 'required',
         ]);
         // update work
         $dokans = Dokan::findOrfail($request)->first();
         $dokans->dokan_name = $request->dokan_name;
         $dokans->dokan_description = $request->dokan_description;
         $dokans->save();

         session()->flash('success','Successfully Updated!');
         return redirect(route('showDokan'));
    }

    public function delete($id){
        $dokans = Dokan::find($id);
        Storage::delete($dokans->dokan_image);
        $dokans->delete();

        session()->flash('success','Dokan Deleted Successfully!');
        return redirect(route('showDokan'));
    }
}
