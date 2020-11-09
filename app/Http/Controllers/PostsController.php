<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use App\User;
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

    public function show_post_page($id)
    {
        $post = Post::find($id);
        $comments = $post->comments()->with('user')->oldest()->paginate(10);

        // return $comments;

        return view('posts.show-page', [
            'post' => $post,
            'comments' => $comments,
        ]);
    }

    public function store_comment($id)
    {
        $attributes = request()->validate(['body' => 'required|max:255']);

        Comment::create([
            'post_id' =>$id,
            'user_id' =>auth()->id(),
            'body' => $attributes['body'],
        ]);

        return redirect("/posts/" . $id);
    }
}
