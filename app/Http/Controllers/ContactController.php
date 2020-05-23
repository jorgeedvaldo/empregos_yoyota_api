<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(ContactRequest $request)
    {
        $isCreate = false;
        if(!($request->author == null))
        {
            Message::create(
                [
                    'author' => $request->author,
                    'email' => $request->email,
                    'subject' => $request->subject,
                    'content' => $request->content
                ]
                );
            $isCreate = true;
        }

        return view('contact', compact('isCreate'));
    }
}
