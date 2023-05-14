<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class post extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function scopeFilter($query,array $filters)
    {

        $query->when($filters['search']?? false ,function($query ,$search){
                $query->where(function ($query) use ($search){
                    $query->where('title', 'like','%'. $search .'%')
                        ->orwhere('body', 'like', '%'. $search .'%');
                });

        });

        $query->when($filters['category']?? false ,function($query,$category)
        {
            $query->wherehas('category',function ($query) use($category)
            {
                $query->where('slug',$category);
            });


        });

        $query->when($filters['author']?? false ,function($query,$author)
        {
            $query->wherehas('author',function ($query) use($author)
            {
                $query->where('id',$author);
            });


        });
    }

    public function isLikedByUser()
    {
        return $this->likes->contains('user_id',auth()->id());
    }

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::Class,'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::Class,);
    }

    public function likes()
    {
        return $this->hasMany(like::Class,);
    }

    public function views()
    {
        return $this->hasMany(View::class);
    }

    public function isViewedbyUser()
    {
        return $this->views->contains('user_id',auth()->id());
    }

}
