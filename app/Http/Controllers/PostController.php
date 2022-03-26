<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'All Posts',
            'active' => 'posts',
            'posts' => Post::latest()->get(),
        ]);
    }

    public function show($id)
    {
        $new_post = Post::find($id);
        return view('post', [
            'title' => 'Single Post',
            'actice' => 'posts',
            'post' => $new_post,
        ]);
    }
}
