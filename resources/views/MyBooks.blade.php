
    @extends('layouts.main')

    @section('container')

    <div class="w-full max-w-[125%] border border-black rounded-lg shadow">
        {{-- @if (str_contains($post->image, 'https:')) --}}
        {{-- <div class="max-h-475px max-w-303px overflow-hidden">
            <img class="p-8 rounded-t-lg w-[100%]" src="{{ $post->image }}" alt="{{ $post->title }}" />
        </div> --}}
        {{-- @else --}}
        <div class="max-h-475px max-w-303px overflow-hidden">
            <img class="p-8 rounded-t-lg w-[100%]" src="" alt="" />
        </div>
        {{-- @endif --}}
        <div class="px-5 pb-5">
            <ul>
                <li>
                    <a href="">
                        <h5 class="text-xl font-sans hover:font-serif tracking-tight text-gray-900"></h5>
                    </a>
                </li>
                <li>
                    <h3 class="text-xl font-sans tracking-tight text-gray-900"></h3>  
                </li>
                <li>
                    <a href="">
                        <h3 class="text-xl font-sans hover:font-serif tracking-tight text-gray-900"></h3>
                    </a>
                </li>
            </ul>
            <div class="flex items-center justify-between">
                <small class="text-2xl font-bold text-gray-900">Rp.</small>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5
                text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
            </div>
        </div>
    </div>

    @endsection

