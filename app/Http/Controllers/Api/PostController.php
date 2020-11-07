<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index(Post $post)
    {
        return response()->json($post->where('status', 'published')->get());
    }
}
