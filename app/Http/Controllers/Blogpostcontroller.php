<?php

namespace App\Http\Controllers;

use App\Models\Post; 
use Illuminate\Http\Request;

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
    

   
    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
            'content' => 'required|max:5000', 
            'category' => 'required|max:255',
            'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',  
            'publish_status' => 'required', 
            'publish_date' => 'required|date',
        ]);
    
    
        if ($request->hasFile('featured_image')) {
           dd($request->input('featured_image'));
        }
     
    }
 /*
public function show($id){
    $post=Post::find($id);
    return view('post.show',compact('post'));
}
public function edit($id){
    $post=Post::find($id);
    return view('post.edit',compact('post'));
}
public function update(Request $request, $id){
    $post=Post::find($id);
    $post->update($request->all());
    return redirect()->route('post.index');
}
public function destroy($id){
    $post=Post::find($id);
    $post->delete();
    return redirect()->route('post.index');}*/
}