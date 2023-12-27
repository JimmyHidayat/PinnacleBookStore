@extends('dashboard.layouts.main')

@section('container')
<div class="">
        <div class="p-6">
            <div class="bg-gray-900 shadow-md shadow-black/5 p-6 rounded">
                <div class="flex justify-between mb-4 items-start">
                    <div class="font-medium">Post Categories</div>
                    <div class="flex items-center">

                @if(session()->has('success'))
                    <div id="notification" class="w-full max-w-xs p-4 text-gray-900 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-300" role="alert">
                        <div class="flex items-center mb-3">
                            <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">New notification</span>
                                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white justify-center items-center flex-shrink-0 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#notification" aria-label="Close">
                                <span class="sr-only">Close</span>
                                    <svg class="w-3 h-3" aria-hidden="true" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                </button>
                        </div>
                    {{ session('success') }}
                    </div>
                @endif
                            

        <!-- Modal toggle -->
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Tambah Category
        </button>
  
        <style>
            #crud-modal, #crud-modal2 {
                display: hidden;
                justify-content: center;
                align-items: center;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5); /* Adjust the background color and opacity as needed */
                z-index: 1000;
            }
        
            #crud-modal .max-w-md, #crud-modal2 .max-w-md {
                width: 100%;
                max-width: 30rem; /* Adjust the maximum width as needed */
            }
        </style>

        <!-- Main modal -->
        <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden justify-center items-center fixed top-0 left-0 w-full z-50 md:inset-0 h-[calc(100%-1rem)] ">
                <div class="relative p-4 max-w-lg w-full">
                <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Add new Category</h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
            <form action="{{ route('create_category') }}" method="POST" class="p-4 md:p-5" enctype="multipart/form-data"> 
                @csrf
                  <div class="grid gap-4 mb-4 grid-cols-2">
                      
                      <div class="col-span-2 sm:col-span-1">
                          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                          <select id="category_name" name="category_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                              <option selected="">Select category</option>
                              <option value="1">Novel</option>
                              <option value="2">Buku</option>
                              <option value="3">Biografi</option>
                              <option value="4">Komik</option>
                          </select>
                      </div>        
                    </div>
                        <button type="submit" class="text-Black inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                Create New Category
                        </button>
                    </div>
                </div>
            </div>

            </form>

                {{-- Akhir Modal 1 --}}
        
            </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[460px]">
                        <thead>
                            <tr>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                    Category ID
                                </th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                    Category Name
                                </th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                            <td class="py-2 px-4">
                                <div class="flex items-center">
                                    <a href="#"
                                    class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">{{ $post->id  }}
                                    </a>
                                </div>
                            </td>
                            <td class="py-2 px-4">
                                <span class="text-[13px] font-medium text-gray-600">{{ $post->category->name }}</span>
                            </td>
                            <td class="py-2">
                                <div class="flex items-center">
                                    <span onclick="window.location.href='/dashboard/categories/{{ $post->title }}'" class="btn-watch btn-btn-watch">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                                            <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                              <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                              <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z"/>
                                            </g>
                                          </svg>
                                    </span>
                                    <span onclick="window.location.href='/dashboard/categories/{{ $post->title }}/edit'" class="btn-edit btn-btn-edit">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.418 17.861 1 20l2.139-6.418m4.279 4.279 10.7-10.7a3.027 3.027 0 0 0-2.14-5.165c-.802 0-1.571.319-2.139.886l-10.7 10.7m4.279 4.279-4.279-4.279m2.139 2.14 7.844-7.844m-1.426-2.853 4.279 4.279"/>
                                        </svg>
                                    </span>
                                    <form action="/dashboard/categories/{{ $post->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn-delete btn-btn-delete" onclick="return confirm('Are You Sure!!!')" >
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{--  --}}
                </div>
            </div>
        </div>
    {{-- </main> --}}
    <!-- end: Main -->
</div>

@endsection 