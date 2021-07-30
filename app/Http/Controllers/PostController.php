<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show(Post $post) {
        return view('post', ['post' => $post]);
    }

    public function create() {
        return view('admin/posts/create');
    }

    public function index() {

        $posts = Post::orderBy('id', 'desc')->get();
        // $posts = Post::all();
        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function store() {   

        $inputs = request()->validate([
            'title' => 'required',
            'post_image' => 'file',
            'body' => 'required'
        ]);  

        if (request('post_image')) {        
            $inputs['post_image'] = request('post_image')->store('images');  
        }



        auth()->user()->posts()->create($inputs);

        return back();
    }
}