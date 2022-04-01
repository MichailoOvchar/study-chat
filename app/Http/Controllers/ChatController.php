<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResources;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    function users(){
        $users = User::all();

        return response()->json([
            'status' => true,
            'users' => UserResources::collection($users),
        ]);
    }

    function sendMessage(Request $request){
        $message = new Message;

        $message->text = $request->text;
        $message->user_id = $request->user_id;
        $message->save();

        return response()->json([
            'status' => true,
            'method' => 'send',
        ]);
    }

    function chatItem($user_id){
        $messages = Message::all();

        $html = view('chat-blocks', compact(['messages', 'user_id']))->render();

        return response()->json([
            'status' => true,
            'html' => $html,
        ]);
    }
}
