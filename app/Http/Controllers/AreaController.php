<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\LogoChange;

class AreaController extends Controller
{
    public function index(){
        $data = [ ];
        $data['logochange'] = LogoChange::all();

        return view ('backend.area.add', $data);
    }

    public function store(Request $request){

        //  validation start here
        $request->validate([
            'area_name' => 'required|min:3|max:120',
         ]);
        
         //  data insert
         $areas = new Area();
         $areas->area_name = $request->area_name;
         $areas->save();

         // falsh message
         session()->flash('success','Area Created successfully!');
         return redirect(route('showArea'));
    }

    public function show(){
        $data = [ ];
        $data['areas'] = Area::all();
        $data['logochange'] = LogoChange::all();

        return view('backend.area.show', $data);
    }

    public function edit($areaid){
        $data = [ ];
        $data['areas'] = Area::find($areaid);

        return view('backend.area.edit', $data);
    }

    public function update(Request $request){
        // validation
        $request->validate([
            'area_name' => 'required|min:3',
         ]);

         // update work
   
         $areas = Area::findOrfail($request)->first();
         $areas->area_name = $request->area_name;
         $areas->save();

         session()->flash('success','Successfully Updated!');
         return redirect(route('showArea'));
    }

    public function deleteMe($id){
        $areas = Area::find($id);
        $areas->delete();

        session()->flash('success','Deleted Successfully!');
        return redirect(route('showArea'));
    }
}
