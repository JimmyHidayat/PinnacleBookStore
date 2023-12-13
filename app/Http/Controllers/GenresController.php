<?php

namespace App\Http\Controllers;

use App\Models\genres;
use App\Http\Requests\StoregenresRequest;
use App\Http\Requests\UpdategenresRequest;

class GenresController extends Controller
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
    public function store(StoregenresRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(genres $genres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(genres $genres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategenresRequest $request, genres $genres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(genres $genres)
    {
        //
    }
}
