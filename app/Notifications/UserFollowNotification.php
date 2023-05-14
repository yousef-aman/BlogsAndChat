<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;

class UserFollowNotification extends Notification implements ShouldBroadcast
{
    use Queueable;
    public $authUser;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($authUser)
    {
        $this->authUser = $authUser;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','broadcast'];
    }


    public function toArray($notifiable)
    {
        return [
            'user_id'=>$this->authUser['id'],
            'name'=>$this->authUser['name'],
            'email'=>$this->authUser['email'],
            'image'=>$this->authUser['image'],
            'message'=>'Started Follow You'
        ];
    }

    public function toBroadcast($notifiable)
    {
        $notification=[
            "data"=>[
                'user_id'=>$this->authUser['id'],
                'name'=>$this->authUser['name'],
                'email'=>$this->authUser['email'],
                'image'=>$this->authUser['image'],
                'message'=>'Started Follow You'
                ]
        ];
        return new BroadcastMessage([
            'notification'=>$notification
        ]);
    }
}
