<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AreaController extends Controller
{
    public function index(){
        return view ('backend.area.add');
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
         return redirect(route('addArea'));
    }

    public function show(){
        $data = [ ];
        $data['areas'] = Area::all();

        return view('backend.area.show', $data);
    }
}
