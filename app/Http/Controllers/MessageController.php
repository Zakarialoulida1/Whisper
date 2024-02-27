<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
   
    
   
  
        public function index()
        {
            // Retrieve sent messages
            $sentMessages = Message::where('user_id', Auth::id())->get();
                                    
            // Retrieve received messages
            $receivedMessages = Message::where('receiver_id', Auth::id())->get();
            
            // Merge sent and received messages into a single array
            $messages = $sentMessages->merge($receivedMessages);
            
            // Sort messages by creation date
            $sortedMessages = $messages->sortBy('created_at');
            
            // Pass sorted messages to the view
            return view('conversation', ['messages' => $sortedMessages]);
        }
    
    
}
