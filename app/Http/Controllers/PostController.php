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


        // $posts = Post::latest();

        // if(request('search')) {
        //     $posts->where('title', 'like', '%' . request('search') . '%');
        // }
        // dd(request('search'));

        return view('posts.index', [
            "title" => "Posts",
            "posts" => Post::all(),
            // "posts" => $posts->get()
            "posts" => Post::latest()->filter(request(['search', 'category']))->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function search(Request $request)
    {
        if($request->ajax()) {
            $output = '<section class="mx-5 my-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 home ml-6">';
            $posts = Post::where('title', 'LIKE', '%' . $request->search . '%')
            ->orWhere('author', 'LIKE', '%' . $request->search . '%')
            ->get();

            if($posts) {
                foreach($posts as $post) {
                    $output .= '<div class="w-full max-w-[125%] border border-black rounded-lg shadow"  >'.
                    '<div class="max-h-475px max-w-303px overflow-hidden">
                        <img class="p-8 rounded-t-lg w-[100%]" src=" '.asset("storage/" . $post->image).' " alt=" '.$post->title.' " />
                    </div>
                    <div class="px-5 pb-5">
                        <ul>
                            <li>
                                <h5 class="text-xl font-sans tracking-tight text-gray-900"> '.$post->author.' </h5>
                            </li>
                            <li>
                                <a href="/showHome/ '.$post->title.'  ">
                                    <h3 class="text-xl font-sans hover:font-serif tracking-tight text-gray-900"> '.$post->title.' </h3>
                                </a>
                            </li>
                            <li>
                                <h3 class="text-xl font-sans tracking-tight text-gray-900"> '.$post->category->name.' </h3>
                            </li>
                        </ul>
                        <div class="flex items-center justify-between">
                            <small class="text-2xl font-bold text-gray-900">Rp. '.$post->price.' </small>
                        </div>
                    </div>
                </div>';
                }
                $output .= '</section>';
                return $output;
            }
        }
        return 'not found';
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // return $request->file('image')->store('post-images');

        $validatedData = $request->validate([
            'author' => 'required|max:255',
            'title' => 'required|unique:posts',
            // 'slug' => 'required|unique:posts',
            'genre' => 'required',
            'image' => 'image|file|max:10000',
            'category_id' => 'required',
            'price' => 'required',
            'description' => 'required'

        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        // $validatedData['user_id'] = auth()->user()->id;
        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New book has been added!');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Post $post)
    // {
    //     return view('dashboard.posts.show', [
    //         "title" => "Single Post",
    //         "post" => $post
    //     ]);
    // }

    public function showHome(Post $post)
    {
        return view('showInUser', [
            "title" => "Single Post",
            "post" => $post
        ]);
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
