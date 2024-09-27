<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Blogpostcontroller extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }



    public function store(Request $request)
    {

        $input = $request->all();
        $input['slug'] = Str::slug($input['title']);
        $post = new Post();
        $post->fill($input);
        $post->save();
        return redirect()->route('posts.index');
    }

}
