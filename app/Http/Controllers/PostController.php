<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{


    /**
     * PostController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::latest()->get();

        return view('post.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('post.show', ['post' => $post]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
//        dd(request()->all());
//        dd(request(['title', 'body']));

//        list($title, $body) = array_values(request(['title', 'body']));

//        $post->title = $title;
//        $post->body  = $body;
//        dd($post);

        $this->validate(request(), [
            'title' => 'required|min:3',
            'body'  => 'required|min:3',
        ]);

//        $post          = new Post(request(['title', 'body']));
//        $post->user_id = auth()->id();
//        $post->save();

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        return redirect('/');
    }
}
