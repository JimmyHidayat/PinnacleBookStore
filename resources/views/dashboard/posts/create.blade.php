@extends('dashboard/layouts/main')

@section('container')

{{-- <div class="justify-content-between flex flex-wrap align-middle pt-3 pb-2 mb-3">
    <h1>Create New Post</h1>
</div>

<div class="w-auto h-auto">

    <form action="/dashboard/posts">
    @csrf
    <div class="mb-3">
        <label for="title" class="">Title</label>
        <input type="text" class="" id="title" name="title" required autofocus>
    </div>
    <div class="mb-3">
        <label for="title" class="">Author</label>
        <input type="text" class="" id="author" name="author" required autofocus>
    </div>
    <div class="mb-3">
        <label for="title" class="">Category</label>
        <select class="form-select" name="category_id" id="category_id">
            @foreach ($posts as $post)
            <option value="{{ $post->category }}">{{ $post->title }}</option>
            <input type="text" class="" id="category" name="category" required autofocus>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="title" class="">Genre</label>
        <input type="text" class="" id="genre" name="genre" required autofocus>
    </div>

    <button type="submit" class="">Create Post</button>
    
    </form>

</div> --}}


@endsection