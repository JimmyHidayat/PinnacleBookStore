<?php

namespace App\Http\Controllers;

use App\Models\book_genres;
use App\Http\Requests\Storebook_genresRequest;
use App\Http\Requests\Updatebook_genresRequest;

class BookGenresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Storebook_genresRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(book_genres $book_genres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book_genres $book_genres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatebook_genresRequest $request, book_genres $book_genres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book_genres $book_genres)
    {
        //
    }
}
