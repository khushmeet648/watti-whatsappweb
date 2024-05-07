<?php

namespace App\Http\Controllers;

use App\Models\Broadcast;
use App\Models\TemplateMessage;
use Illuminate\Http\Request;

class BroadcastController extends Controller
{
    public function history(){
        return view("Broadcast.history");
    }

    public function historypost(Request $request){
        $request->validate([
            'name' => 'required',
            'template' => 'required',
            'date' => 'required',            
        ]);


        $data['Name'] = $request->name;
        $data['TemplateMessage'] = $request->template;
        $data['Date'] = $request->date;
    
       
       $broadcst = Broadcast::create($data);
     
    return redirect()->back()->with('success', "successfully inserted");
    }


    public function schedule(){
        return view("Broadcast.scheduledbroadcast");
    }

    
    
    public function template(){
        $data = TemplateMessage :: select('Name','Category','Language','LastUpdate')->get();
        return view('Broadcast.templatemessages',['message'=> $data]);
        // this message pass in foreach loop with $
       
    }

    public function templatepost(Request $request){
        
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'language' => 'required',
            'title' => 'required',        
            'body' => 'required',
            'footer' => 'required',
            'button' => 'required',
        ]);

       
        
        $data1['Name'] = $request->name;
        $data1['Category'] = $request->category;
        $data1['Language'] = $request->language;
        $data1['BroadcastTitle'] = $request->title;
        $data1['LastUpdate'] = now()->format('Y-m-d');
        $data1['Body'] = $request->body;
        $data1['Footer'] = $request->footer;
        $data1['Buttons'] = $request->button;
   
   
       $template = TemplateMessage::create($data1);
     
    return redirect()->back()->with('success', "successfully inserted");
    
    }

    public function destroy($Name){
        $data = TemplateMessage::where('Name', $Name)->first();

        if($data){
            $data->delete();
            return redirect()->back()->with('success', 'Template deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Data not found.');
        }
      
    }
    
}
