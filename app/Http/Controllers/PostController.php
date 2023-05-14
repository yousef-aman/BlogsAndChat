<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use App\Notifications\SmsWelcomeNotification;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Laravel\Jetstream\Role;

class PostController extends Controller
{
    public function index()
    {
        //    $posts = Post::when(request('search'), function ($query, $search) {
//        return $query->where('title', 'like', $search = "%{$search}%")
//            ->orWhere('body', 'like', $search);
//    })->latest()->get();
//    return view('posts',[
//        'posts'=>$posts,
//        'categories'=>Category::all()
//    ]);
//        auth()->user()->notify((new SmsWelcomeNotification));
        return view
        ('posts.index',
            [
                'posts'=>Post::latest()->filter(request(['search','category','author']))
                    ->paginate(40)->withquerystring(),


                'categories'=>Category::all(),
                'currentCategory'=>Category::firstwhere('slug' ,Request('category'))
            ]

        );

    }
    public function show(Post $post)
    {
        if (auth()->guest())
        {

            $user= auth()->guest();
        }
        else
            $user=auth()->id();


        if (!$post->isViewedbyUser() && auth()->user())
        {
            $post->views()->create([
                'user_id'=>$user
            ]);
        }

        return view('posts.show',[
            'post'=>$post,
            'categories'=>category::all()
        ]);
    }

    public function store()
    {
       $attributes= request()->validate([
            'title'=>'required|max:50',
            'slug'=>['required',Rule::unique('posts','slug')],
            'excerpt'=>'required',
            'body'=>'required',
            'category_id'=>['required', Rule::exists('categories','id')]
        ]);

       $attributes['user_id']= auth()->id();

       post::create($attributes);

       session()->flash("success", "This is success message");

       return redirect('/');
    }
    public function edit(Post $post)
    {
        $attributes= request()->validate([
            'title'=>'required|max:50',
            'slug'=>['required',Rule::unique('posts','slug')->ignore($post->id)],
            'excerpt'=>'required',
            'body'=>'required',
            'category_id'=>['required', Rule::exists('categories','id')]
        ]);
        $post->update($attributes);

        return redirect('/');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        session()->flash("success", "Your file has been deleted");
        return redirect('/');
    }


}
