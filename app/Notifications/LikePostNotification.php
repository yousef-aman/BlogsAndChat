<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LikePostNotification extends Notification implements ShouldBroadcast
{
    use Queueable;
    public $user;
    public $post;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user,$post)
    {
        $this->user=$user;
        $this->post=$post;
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
            'name'=>$this->user['name'],
            'user_id'=>$this->user['id'],
            'email'=>$this->user['email'],
            'image'=>$this->user['image'],
            'message'=>'Liked Your Post '.$this->post['title'],

        ];
    }

    public function toBroadcast($notifiable)
    {
        $notification=[
            "data"=>[
                'name'=>$this->user['name'],
                'user_id'=>$this->user['id'],
                'email'=>$this->user['email'],
                'image'=>$this->user['image'],
                'message'=>'Liked Your Post '.$this->post['title'],
            ]
        ];

        return new BroadcastMessage([
            'notification'=>$notification
        ]);

    }

}
