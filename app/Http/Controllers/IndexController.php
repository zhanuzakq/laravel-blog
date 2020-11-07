<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->paginate(2);

        return view('front.index')->with(['posts' => $posts]);
    }
}
