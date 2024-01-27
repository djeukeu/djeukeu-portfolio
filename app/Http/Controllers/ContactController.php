<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send_message()
    {
        $data = request()->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
        Mail::to(env('MAIL_TO'))->send(new Contact($data));

        return redirect()->back()->with('success', 'message sent');
    }
}
