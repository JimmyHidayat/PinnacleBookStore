<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            "title" => "My Books",
            "posts" => Post::all()
        ]);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            "title" => "Add New Book",
            "categories" => ['Novel', 'Comic', 'Science', 'Biography']
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $validatedData = $request->validate([
        //     'author' => 'required|max:255',
        //     'title' => 'required|unique:posts',
        //     'genre' => 'required',
        //     'category_id' => 'required',
        //     'price' => 'required'

        // ]);

        // $validatedData[''] = auth()->user()->id;
        // Post::create($validatedData);

        // return redirect('/dashboard/posts')->with('success', 'New book has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // return view('dashboard.posts.show', [
        //     "title" => "Single Post",
        //     "post" => $post
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            "post" => $post,
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'author' => 'required|max:255',
            'genre' => 'required',
            'category_id' => 'required',
            'price' => 'required'

        ];

        if($request->title != $post->title) {
            $rules['title'] = 'required|unique:posts'; 
        }

        $validatedData = $request->validate($rules);

        Post::where('id', $post->id)
            ->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'book has been Updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'book has been deleted!');
    }
}
