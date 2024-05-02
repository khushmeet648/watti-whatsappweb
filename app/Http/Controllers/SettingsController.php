<?php

namespace App\Http\Controllers;

use App\Models\BusinessProfile;
use App\Models\General;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function profile(){
        return view('settings.businessprofile');
    }

    public function profilepost(Request $request){
       $request->validate([
           'number'=>'required',
           'about'=>'required',
           'address'=>'required',
           'description'=>'required',
           'email'=>'required',
           'industry'=>'required',
           'web1'=>'required',
           'web2'=>'required',
       ]);

       $data1['PhoneNumber'] = $request->number;
       $data1['About'] = $request->about;
       $data1['BusinessAddress'] = $request->address;
       $data1['BusinessDescription'] = $request->description;
       $data1['Email'] = $request->email;
       $data1['BusinessIndustry'] = $request->industry;
       $data1['BusinessWebsite1'] = $request->web1;
       $data1['BusinessWebsite2'] = $request->web2;


       $business = BusinessProfile::create($data1);
        
       return redirect()->back()->with('success', "successfully inserted");
    }

    public function general(){
        return view('settings.general');
    }

    public function generalpost(Request $request){
        $request->validate([
           'time'=> 'required',
           'language'=> 'required',
           'button'=> 'required',
           'direction'=> 'required',

        ]);
 
        $data1['timezone'] = $request->time;
        $data1['language'] = $request->language;
        $data1['button'] = $request->button;
        $data1['direction'] = $request->direction;
      
 
 
        $general = General::create($data1);
         
        return redirect()->back()->with('success', "successfully inserted");
     }

    public function tags(){
        return view('settings.tags');
    }

    public function importexport(){
        return view('settings.importexport');
    }

    public function msgdeletion(){
        return view('settings.msgdeletion');
    }

    public function manage(){
        return view('settings.managenotification');
    }
}
