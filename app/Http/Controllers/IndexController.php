<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'PUBLISHED')->get();

        return view('front.index')->with(['posts' => $posts]);
    }
}
