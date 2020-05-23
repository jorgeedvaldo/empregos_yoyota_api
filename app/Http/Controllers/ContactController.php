<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\MessageRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(MessageRequest $request)
    {
        $isCreate =  Message::create(
            [
                'author' => $request->author,
                'email' => $request->email,
                'subject' => $request->subject,
                'content' => $request->content
            ]
        );
        if($isCreate)
        {
            return redirect('contact');
        }
    }
}
