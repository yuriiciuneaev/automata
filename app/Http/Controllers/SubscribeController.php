<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubscriberModel;

class SubscribeController extends Controller
{
    public function subscribe(Request $request)
    {
        // echo $request->email; exit;
        $request->validate([
            'email' => 'required',
        ]);
        $email = SubscriberModel::select('email')
            ->where('email', '=', $request->email)
            ->get();


        if ($email->count()) { 
            return ['message' => 'Email already exists!!!'];
        }

        SubscriberModel::create(['email' => $request->email]);
        return ['message' => 'Subscribed successfully!'];
        // return back();
    }
}
