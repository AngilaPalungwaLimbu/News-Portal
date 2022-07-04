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
        $subscribers=Subscribe::all();
        Notification::send($subscribers, new EventNotification);
        toast('Email is send!','success');

    }
}
