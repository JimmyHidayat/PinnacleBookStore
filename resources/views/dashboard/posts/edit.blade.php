@extends('dashboard/layouts/main')

@section('container')

<h1 class="mb-5 justify-center items-center text-center font-semibold">Edit Post</h1>

<form action="/dashboard/posts/{{ $post->id }}" method="post" class="max-w-sm mx-auto" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-5">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
        <input type="text" name="title" id="title" class="block w-full p-4 text-gray-900 border border-black-800 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required autofocus value="{{ old('title', $post->title) }}">
    </div>
    <div class="mb-5">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Author</label>
        <input type="text" name="author" id="author"  class="bg-gray-50 border border-black-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required autofocus value="{{ old('author', $post->author) }}">
    </div>
    <div class="mb-5">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Genre</label>
        <input type="text" name="genre" id="genre"  class="bg-gray-50 border border-black-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('genre', $post->genre) }}">
    </div>
    <div class="mb-5">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
        <input type="text" name="price" id="price"  class="bg-gray-50 border border-black-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('price', $post->price) }}">
    </div>
   
    <div class="mb-4">
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
        <select id="category_id" name="category_id" class="bg-gray-50 border border-black-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('category_id', $post->category->name) }}">
    
        <option value="">Select category</option>
        <option value="1">Novel</option>
        <option value="2">Buku</option>
        <option value="3">Biografi</option>
        <option value="4">Komik</option>
        <option value="5">Api</option>
        </select>
    </div>
    <div class="col-span-2 mb-4">
        <div class="px-4 py-4 bg-white rounded-b-lg dark:bg-gray-800">
                <textarea id="description" name="description" rows="8" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="">{{ old('description', $post->description) }}
                </textarea>
        </div>
    </div>
    <div class="col-span-2">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Edit Image</label>
        <input type="hidden" name="oldImage" value="{{ $post->image }}">
        @if($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-preview block ">
        @else
            <img class="img-preview" style="max-height: 400px" style="max-width: 300px">
        @endif
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="image" name="image" type="file" onchange="previewImage">
    </div>
    <div class="mt-4">
        <button type="submit" class="justify-center items-center text-gray-900 hover:text-white border border-gray-900 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
            Edit Post
        </button>
    </div>
  </form>
  
  <script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
  </script>



@endsection