<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'author' => 'required|max:255',
            'title' => 'required|unique:posts',
            'genre' => 'required',
            'category_id' => 'required',
            'price' => 'required'

        ]);

        // $validatedData[''] = auth()->user()->id;
        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New book has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            "title" => "Single Post",
            "post" => $post
        ]);
        // return $post;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // dd($post->all());
        // Post::destroy($post->id);

        // return redirect('/dashboard/posts')->with('success', 'book has been deleted!');
    }
}
