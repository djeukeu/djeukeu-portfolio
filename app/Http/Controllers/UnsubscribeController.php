<?php

namespace App\Http\Controllers;

use App\Mail\Unsubscribe;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;

class UnsubscribeController extends Controller
{
    public function index()
    {
        return view('unsubscribe');
    }

    public function send()
    {
        $data = request()->validate([
            'email' => 'required|email',
        ]);
        $subscriber = Subscriber::where(['email' => $data['email'], 'status' => 'active'])->first();

        if (! $subscriber) {
            return response()->json(['message' => 'Your email in not subscribe.'], '400');
        } else {
            $subscriber->status = 'inactive';
            $subscriber->save();
            Mail::to($data['email'])->send(new Unsubscribe($data));

            return redirect()->back()->with('success', 'You have been successfully unsubscribed.');
        }
    }
}
