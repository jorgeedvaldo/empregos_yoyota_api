<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Message;

class MessageController extends Controller
{
    public function create(Request $request)
    {
        $message = new Message();

        $message->author = $request->author;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->content = $request->content;

        $message->save();
        echo 'Your message has been sent successfully.';
    }
}
