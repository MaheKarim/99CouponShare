<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;
use App\LogoChange;

class ContactUsController extends Controller
{
    public function index(){
        $data = [ ];
        $data['logochange'] = LogoChange::find(6);
        $data['contactsubmits'] = ContactUs::all();
        //$data['dokans'] = Dokan::where('dokan_image')->get();
        return view('frontend.contact', $data);
    }
    
    public function create(Request $request){
        $contactsubmit = new ContactUs();
        $contactsubmit->contact_name = $request->contact_name;
        $contactsubmit->contact_mail = $request->contact_mail;
        $contactsubmit->contact_web = $request->contact_web;
        $contactsubmit->contact_msg = $request->contact_msg;
        $contactsubmit->save();
        
        session()->flash('success','Thank you for contact with us!  We will reply back soon.');
        return redirect('/');
    }
    public function show(){
        $data = [ ];
        $data['logochange'] = LogoChange::find(6);
        $data['contactsubmits'] = ContactUs::all();
        return view('backend.contact.show',$data);
    }

    public function delete($id){

        $contactsubmit = ContactUs::find($id);
        $contactsubmit->delete();
        session()->flash('success','Contact deleted successfully!');

        return redirect(route('showcontact'));
    }
}
