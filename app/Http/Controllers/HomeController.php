<?php

namespace App\Http\Controllers;

use App\Mail\Subscribe;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

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

        $existSubscriber = Subscriber::where('email', $data['email'])->first();

        if (!$existSubscriber) {
            $subscriber = new Subscriber;
            $subscriber->name = $data['name'];
            $subscriber->email = $data['email'];
            $subscriber->save();
            $data['url'] = URL::temporarySignedRoute(
                'subscribe',
                now()->addMinutes(30),
                ['token' => $subscriber->id]
            );
            Mail::to($data['email'])->send(new Subscribe($data));
        } else {
            $data['url'] = URL::temporarySignedRoute(
                'subscribe',
                now()->addMinutes(30),
                ['token' => $existSubscriber->id]
            );
            Mail::to($data['email'])->send(new Subscribe($data));
        }
        return redirect()->back()->with('success', 'message sent');
    }
}
