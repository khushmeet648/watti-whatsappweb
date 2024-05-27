<?php

namespace App\Http\Controllers;

use App\Models\Sequence;
use Illuminate\Http\Request;

class ChatbotsController extends Controller
{
   public function flows(){
    return view("chatbot.chatbotflows");
   }

   public function default(){
    return view("chatbot.trigger.default");
   }

   public function keyword(){
    return view("chatbot.trigger.keyword");
   }

   public function keywordaction(){
     return view("chatbot.trigger.keywordaction");
    }

   public function replymaterial(){
      return view("chatbot.trigger.replymaterial");
     }
// sub folder of replymaterial
     public function text(){
      return view("chatbot.trigger.replymaterial.text");
     }

     public function document(){
      return view("chatbot.trigger.replymaterial.document");
     }
// ----
     public function routing(){
      return view("chatbot.trigger.routing");
     }

   public function sequence()
   {
     $data = Sequence :: select('SequenceName')->get();
     return view('chatbot.trigger.sequence',['message'=> $data]);
   }
  

   public function sequencepost(Request $request){
    $request-> validate([
     'name'=>'required'
    ]);

    $data['SequenceName']= $request->name;
    $sequence = Sequence::create($data);
    return redirect()->back()->with('success', "successfully inserted");

    }

    public function destroys($Name){
     $data = Sequence::where('SequenceName', $Name)->first();

     if($data){
         $data->delete();
         return redirect()->back()->with('success', 'Sequence deleted successfully.');
     } 
     else {
         return redirect()->back()->with('error', 'Sequence not found.');
     }
   
 }
 
}