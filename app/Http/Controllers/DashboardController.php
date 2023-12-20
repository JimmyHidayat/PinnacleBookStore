<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // return view('dashboard.index', [
        //     "title" => "Dashboard"
        // ]);
    }

    public function create()
    {
        // return view('dashboard.posts.create');
    }


    // public function create(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'author' => 'required|max:255',
    //         'title' => 'required|unique:posts',
    //         'category' => 'required',
    //         'price' => 'required'
    //     ]);
    // }
}
 