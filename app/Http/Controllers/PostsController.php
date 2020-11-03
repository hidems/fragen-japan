<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(50);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store()
    {
        $attributes = request()->validate(['body' => 'required|max:255']);

        Post::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body']
        ]);

        return redirect(route('home'));
    }
}
