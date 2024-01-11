<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Christian Djeukeu';

        return view('app', ['name' => $name]);
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
