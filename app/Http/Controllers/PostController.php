<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $blog_posts = Post::all();
        return view('posts', [
            'title' => 'Blog',
            'posts' => $blog_posts,
        ]);
    }

    public function show($id)
    {
        $new_post = Post::find($id);
        return view('post', [
            'title' => 'Single Post',
            'post' => $new_post,
        ]);
    }
}
