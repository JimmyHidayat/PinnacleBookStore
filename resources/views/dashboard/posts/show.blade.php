@extends('dashboard.layouts.main')

@section('container')

    <h1 style="font-size: 30px; text-align:center;">Post By. {{ $post->author }}</h1>
    <div class="flex justify-center">
        @if (str_contains($post->image, 'https:')) 
        <img class="mt-4" src="{{ $post->image }}" alt="{{ $post->title }}" style="width: 250px; height: 350px;">
        @else
        <img class="mt-4" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="width: 250px; height: 350px;">
        @endif
    </div>

    <div class="flex justify-center">
        <h1 style="font-size: 30px">{{  $post->title }}</h1>
    </div>
    <div class="flex justify-center">
        <h2 style="font-size: 20px">{{  $post->author }}</h2>
    </div>
    <div class="flex justify-center max-w-screen mt-4">
        <p class="text-sm text-center">{{ $post->description }}</p>
    </div>
    
@endsection