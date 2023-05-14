<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Notifications\LikePostNotification;
use Illuminate\Http\Request;

class PostLikesController extends Controller
{
    public function store(post $post ,Request $request)
    {
        if ($post->isLikedByUser())
        {
            return response(null,409);
        }

        $post->likes()->create([
            'user_id'=>$request->user()->id,
        ]);

        if ($post->author->id !== $request->user()->id)
        {
            $post->author->notify(new LikePostNotification($request->user(),$post));
        }


        return 'Liked';
    }

    public function destroy(Post $post,Request $request)
    {
        $request->user()->likes()->where('post_id',$post->id)->delete();

        return 'UnLiked';
    }
}
