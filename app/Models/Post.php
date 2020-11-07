<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Models\Post as VoyagerPost;

class Post extends VoyagerPost
{
    use HasFactory;

    protected $table = 'posts';

    protected $guarded = [];

    

    public function scopeCurrentUser($query)
    {
        if(Auth::user()->hasRole('admin'))
        {
            return $this;
        }
        return $query->where('author_id', Auth::user()->id);
    }
}
