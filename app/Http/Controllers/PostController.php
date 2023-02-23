<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Http\Response as ResponseAlias;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function index()
    {

        $post = Post::latest()->get();


        return view('posts.index', ['post' => $post]);
    }


    public function create()
    {
        return view('posts.create');
    }



    public function store(StorePostRequest $request)
    {
        if($request->hasFile('photo')) {
            $path = $request->file('photo')->store('post-photos');
        }


        $post = Post::create([
            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->content,
            'photo' => $path ?? null
        ]);

        return redirect()->route('posts.index');
    }


    public function show(Post $post)
    {
        return view('posts.show')->with([
            'post' => $post,
            'recent_posts' => Post::latest()->get()->except($post->id)->take(5)
        ]);
    }


    public function edit(Post $post)
    {
        return view('posts.edit')->with('post', $post);
    }


    public function update(StorePostRequest $request, Post $post)
    {

        if($request->hasFile('photo')) {

            if(isset($post->photo)) {
                Storage::delete($post->photo);
            }

            $path = $request->file('photo')->store('post-photos');
        }

        $post->update([
            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->content,
            'photo' => $path ?? $post->photo
        ]);

        return redirect( route('posts.show', ['post' => $post->id]));
    }


    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');

    }
}
