<?php

namespace App\Http\Controllers;

use App\Models\conversation;
use App\Models\message;
use App\Models\User;
use Illuminate\Http\Request;
use App\Events\SendMessage;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat.index');
    }

    public function show(User $user)
    {
        $user1= auth()->user();
        $user2=User::find(2);
//        foreach ($user1->conversations as $conversation)
//        {
//          $conversation->messages;
//        }

//
//        $user1->conversations->where(function ())
        return message::where(['sender'=>auth()->id(),'receiver'=>$user->id])
                        ->orwhere(function($query)use ($user)
                        {
                              $query->where(['sender'=>$user->id,'receiver'=>auth()->id()]);
                        }
        )->with('user')->get();

    }

    public function store(User $user)
    {


        $messages =auth()->user()->messages()->create([
            'message'=>request()->message,
            'receiver'=>$user->id
        ]);

        broadcast(new SendMessage(auth()->user(),$messages))->toOthers();
        return 'message sent';
    }
}
