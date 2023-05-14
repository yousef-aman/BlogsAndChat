<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        return response()->json(
            [
                'posts'=>Post::with(['category'])->get(),


                'categories'=>Category::all(),
                'currentCategory'=>Category::firstwhere('slug' ,Request('category'))
            ],200);
    }

}
