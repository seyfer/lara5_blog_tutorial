<?php

namespace App\Http\Controllers;

use App\Tag;

class TagController extends Controller
{
    public function index(Tag $tag)
    {
        $posts = $tag->posts()->get();

//        dd($posts);

        return view('post.index', compact('posts'));
    }
}
