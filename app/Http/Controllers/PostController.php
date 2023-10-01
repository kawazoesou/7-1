<?php

namespace App\Http\Controllers;

dev_basis04
use App\Models\Post;
use App\Http\Requests\PostRequest; // useする
use Illuminate\Http\Request;
use App\Models\Post;
master

class PostController extends Controller
{
    public function index(Post $post)
    {
dev_basis04
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
    }

    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request, Post $post) // 引数をRequestからPostRequestにする
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}
        return $post->get();
    }
}
master
