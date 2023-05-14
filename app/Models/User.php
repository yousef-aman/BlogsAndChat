<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $guarded=[];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function receivesBroadcastNotificationsOn()
    {
        return 'post_like_notify.'.$this->id;
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::Class,);
    }

    public function likes()
    {
        return $this->hasMany(like::Class,);
    }

    public function messages()
    {
        return $this->hasMany(message::class,'sender');
    }


    public function conversations()
    {
        return $this->belongsToMany(conversation::class,'conversations_users','user1_id','conversation_id')->withTimestamps();
    }
    /* ----------------------   Follow   ---------------------- */
    public function follows()
    {
        return $this->belongsToMany(User::class,'follows','TheFollowerUser_Id','TheFollowedUser_Id')->withTimestamps();

    }

    public function isFollowing(User $user)
    {
        return $this->follows()->where('TheFollowedUser_Id',$user->id)->exists();
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unFollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function ToggleFollow(User $user)
    {
        if ($this->isFollowing($user))
        {
            return $this->unFollow($user);
        }

        return $this->follow($user);
    }
    public function following()
    {
        return $this->belongsToMany(User::class,'follows','TheFollowedUser_Id','TheFollowerUser_Id')->withTimestamps();

    }

    public function views()
    {
        return $this->hasMany(View::class);
    }
    /* ----------------------   EndFollow   ---------------------- */
    public function routeNotificationForVonage($notification)
    {
        return $this->phone_number;
    }
}
