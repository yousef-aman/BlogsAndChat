<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class NotificationsController extends Controller
{
    public function show()
    {
        return auth()->user()->notifications;

    }
    public function store()
    {
        foreach (auth()->user()->notifications as $notifi)
        {
          $notifi->markAsRead();
        }

        return auth()->user()->unreadNotifications;
//        auth()->user()->notifications->
    }
}
