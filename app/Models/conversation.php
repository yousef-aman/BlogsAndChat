<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conversation extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function users()
    {
        return $this->belongsToMany(User::class,'conversations_users','conversation_id','user1_id');
    }

    public function messages()
    {
        return $this->hasMany(message::class);
    }
}
