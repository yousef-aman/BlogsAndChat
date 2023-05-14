<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadProfileController extends Controller
{
    public function store()
    {
        $user = User::find(Auth::id());
        request()->validate([
            'image'=>'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);
        $imageName=time().'.'.request()->image->extension();
        request()->image->move(public_path('images'),$imageName);
        $user->image=$imageName;
        $user->save();
        return back();
    }

}
