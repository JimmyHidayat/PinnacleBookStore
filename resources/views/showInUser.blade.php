@extends('layouts.main')

@section('container')


    {{-- <div class="flex justify-center">
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
    </div>  --}}

    <h1 style="font-size: 30px; text-align:center; padding-bottom:2rem;">Post By. {{ $post->author }}</h1>
    
    <section class="flex flex-col items-center bg-[#FFCCAC] border border-gray-200 rounded-lg max-w-5xl shadow md:flex-row mx-auto">
        @if (str_contains($post->image, 'https:')) 
            <img class="" src="{{ $post->image }}" alt="{{ $post->title }}" style="width: 80%; max-width: 400px; height: 550px;">
        @else
            <img class="" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="width: 80%; max-width: 400px; height: 550px;">
        @endif
        <div class="flex flex-col justify-center p-4 leading-normal text-center md:text-center">
            <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 dark:text-black">{{  $post->title }}</h5>
            <p class="mb-3 font-normal text-black dark:text-black mx-auto md:mx-0 max-w-2xl">{{ $post->description }}</p>
            <a href="/" class="with-banner inline-block mr-7 py-2 px-4 bg-[#C1E1DC] text-black rounded-md hover:text-white">
                Back To Home
            </a>
            
        </div>
    </section>
    
    

@endsection