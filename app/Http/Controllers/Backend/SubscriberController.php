<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscribe;
use App\Notifications\EventNotification;
use Illuminate\Support\Facades\Notification;

class SubscriberController extends Controller
{
    public function subscriber()
    {
        $subscribers=Subscribe::all();
        return view('backend.subscribe.index',compact('subscribers'));
    }
    public function event()
    {
        $notice=[
            "title"=>"Nameste",
            "message"=>"Hello According to the Pew Research Center, 97% of adult Americans have a cell phone capable of receiving text messages. As time spent on phones continues to increase, it's no surprise that businesses are pursuing text message marketing campaigns. There are dozens of quality services on the market, but a few stand out, especially for small businesses looking to please subscribers. We researched 13 text message marketing services and chose our five best picks based on their features, pricing, ease of use, setup process and customer service.",
        ];
        $subscribers=Subscribe::all();
        Notification::send($subscribers, new EventNotification($notice ));
        toast('Email is send!','success');
        return view('backend.subscribe.index',compact('subscribers'));
    }
}
