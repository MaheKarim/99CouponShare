<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokan;
use Auth;

class DokanController extends Controller
{
    public function show(){
        if(Auth::user()->user_role_id == 1 ){
            $data['dokans'] = Dokan::all();
        }else{
            $data['dokans'] = Dokan::where('user_id', Auth::id())->get();
        } 
        
        return view('backend.dokan.show',$data);
    }

    public function index(){
        return view('backend.dokan.add');
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
         if(Dokan::where('user_id', auth::id())->count() > 4 ){ 
            session()->flash('success','Sorry! You have already created a Doakn.');
            return redirect(route('showDokan')); 
         } 

         //  data insert
         $dokans = new Dokan();
         $dokans->dokan_name = $request->dokan_name;
         $dokans->dokan_description = $request->dokan_description;
         $dokans->user_id = Auth::id();
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
        $dokans->delete();

        session()->flash('success','Dokan Deleted Successfully!');
        return redirect(route('showDokan'));
    }
}
