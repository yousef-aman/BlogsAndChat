<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\UserFollowNotification;

class FollowController extends Controller
{
    public function store(User $user,Request $request)
    {

       auth()->user()->ToggleFollow($user);

        $authUser=auth()->user();

        if ($authUser->isFollowing($user))
       $user->notify(new UserFollowNotification($authUser));



       return back();

    }
}
