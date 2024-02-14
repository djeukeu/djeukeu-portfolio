<?php

namespace App\Http\Controllers;

use App\Mail\Subscribe;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function subscribe()
    {
        $data = request()->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);
        Mail::to($data['email'])->send(new Subscribe($data));

        return redirect()->back()->with('success', 'message sent');
    }
}
