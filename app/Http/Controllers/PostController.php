<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Post;

class PostController extends Controller
{
    public  function show($slug){

        $post = Post::where('slug',$slug)->firstOrFail();

        if(! $post){
            abort(404);
        }

    return view('post.post', [
        'post' => $post
    ]);
    }

    public function create(){
        return view('post.create');
    }

    public function store(){
        $post = new Post();
        $post->slug = request('slug');
        $post->title = request('title');
        $post->body = request('body');
        $post->save();
        return redirect('/posts');
    }

    public function edit($slug){

        $post = Post::where('slug',$slug)->firstOrFail();

        return view('post.edit', compact('post'));
    }

    public function update($slug){

        $post = Post::where('slug',$slug)->firstOrFail();

        $post->slug = request('slug');
        $post->title = request('title');
        $post->body = request('body');

        $post->save();

        return redirect('/posts');

    }

    public function delete($slug){

        $post = Post::where('slug',$slug)->firstOrFail();

        $post->delete();

        return redirect('/posts');

    }


}
