{{-- @extends('dashboard.layouts.main')

@section('container')


<a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="/docs/images/blog/image-4.jpg" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    </div>
</a>


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
    
@endsection --}}