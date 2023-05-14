<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadProfileController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PostController::class,'index']);
Route::get('post/{post:slug}',[PostController::class,'show']);
Route::post('posts/{post:slug}/comments',[PostCommentController::class,'store']);
Route::post('posts/create',[PostController::class,'store']);
Route::patch('posts/edit/{post}',[PostController::class,'edit']);
Route::delete('posts/delete/{post}',[PostController::class,'destroy']);

Route::post('post/like/{post}',[PostLikesController::class,'store']);

Route::post('follow/{user}',[FollowController::class,'store']);


Route::delete('post/unlike/{post}',[PostLikesController::class,'destroy']);


Route::get('status',[UserController::class,'userOnlineStatus']);

Route::get('user/profile/show',[ProfileController::class,'index']);

Route::post('image/profile/store',[UploadProfileController::class,'store']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');




});
//Route::get('/{pathMatch}',function (){return view('posts.index');})->where('pathMatch',".*");


Route::get('chats',[ChatController::class,'index'])->middleware('auth');
Route::get('chats/messages/show/{user}',[ChatController::class,'show']);
Route::post('chats/messages/store/{user}',[ChatController::class,'store']);


Route::post('makeRead/notify',[NotificationsController::class,'store']);

Route::post('get/allNotify',[NotificationsController::class,'show']);


/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////

