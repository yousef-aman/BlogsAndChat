<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {

        return view('myprofile.index',[
            'posts'=>Post::latest()->filter(request(['author']))
                ->paginate(40)->withquerystring(),
            'user'=>User::where('id',request('author'))->first(),
            'categories'=>Category::all(),
            'currentCategory'=>Category::firstwhere('slug' ,Request('category'))
        ]);
    }
}
