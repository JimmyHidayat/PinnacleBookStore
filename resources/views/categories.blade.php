{{-- <!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body> --}}
        @extends('layouts.main')

        @section('container')
        
        @include('partials.navbar')

        <div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
            <button type="button" class="text-black hover:text-white border border-black bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">All categories</button>
            <button type="button" class="text-gray-900 border border-white hover:border-gray-200 hover:bg-blue-700 hover:text-white  dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Sains</button>
            <button type="button" class="text-gray-900 border border-white hover:border-gray-200 hover:bg-blue-700 hover:text-white  dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Novel</button>
            <button type="button" class="text-gray-900 border border-white hover:border-gray-200 hover:bg-blue-700 hover:text-white  dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Biografi</button>
            <button type="button" class="text-gray-900 border border-white hover:border-gray-200 hover:bg-blue-700 hover:text-white  dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Sastra</button>
        </div>

        <div class="flex grid-cols-2 ml-6 gap-4 top-0 left-0 mb-8 justify-center">
            <div class="image-container">
                <img class="h-auto rounded-lg" src="img/hujan.jpg" alt="image" width="300">
            </div>
            <div class="image-container">
                <img class="h-auto rounded-lg" src="img/hujan.jpg" alt="image" width="300">
            </div>
            <div class="image-container">
                <img class="h-auto rounded-lg" src="img/hujan.jpg" alt="image" width="300">
            </div>
        </div>

        @endsection
    {{-- </body>
</html> --}}

