<?php

namespace App\Http\Controllers;

use App\Events\Massageeven;
use App\Events\UserstatusEuen;
use App\Models\Chat;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function save_chat(Request $request){
        try{
  $chat= Chat::create([ 
    'reciver_id'=>$request->recver_id,
'sender_id'=>$request->send_id,
'massage'=>$request->massage
]
   
    
);
event(new Massageeven( $chat));

            return response()->json(['sucess'=>true ,'data'=> $chat]);
        } catch(\Exception $e){
return response()->json(['error'=>$e->getMessage()]);
        }
    }
    function load(){
        $user=  User::whereNotIn('id',[auth()->user()->id])->get();
        // broadcast(new UserstatusEuen())->toOthers();
        return view('chat',compact( 'user'));
    }
}
