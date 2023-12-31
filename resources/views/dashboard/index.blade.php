@extends('dashboard.layouts.main')

@section('container')


<h1 style="font-family: sans-serif; font-size:30px; text-align:center; padding-top:2rem; font-weight:bold;">Welcome, {{ auth()->user()->username }}</h1>


<div class="flex justify-center items-start h-screen">
    <div style="background-color:#FFCCAC; " class="w-full max-w-sm border border-black rounded-lg shadow dark:bg-aqua-800 dark:border-gray-700 mt-10">
      <div class="flex justify-end px-4 pt-8">
        {{-- <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button"> --}}
          {{-- <span class="sr-only">Open dropdown</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
            <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
          </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
          <ul class="py-2" aria-labelledby="dropdownButton">
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
            </li>
          </ul>
        </div> --}}
      </div>
      <div class="flex flex-col items-center pb-10">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="img/panther.jpg" alt="Bonnie image"/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ auth()->user()->username }}</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ auth()->user()->email }}</span>
        <div class="flex mt-4 md:mt-6">
          <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add friend</a>
          <a href="/contact" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 ms-3">Message</a>
        </div>
      </div>
    </div>
  </div>
  




@endsection