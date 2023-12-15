<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- @vite('resources/css/app.css') --}}
        <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.17/dist/full.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="/css/style.css">
        <script src="https://cdn.tailwindcss.com"></script>

        {{--  --}}

        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        {{-- Font Google --}}
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap" rel="stylesheet">
        {{--  --}}
        <title>PinnacleBookStore</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,800;1,400&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

        {{--  --}}

    </head>
    <body class="allow-copy">
    <div class="login">

        @include('partials.navbar')



    <div class="w-full max-w-sm mx-auto p-3 bg-[#D9AE84] border border-[#D9AE84] rounded-lg shadow sm:p-2 md:p-4 transform translate-y-20">
        
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


          <form class="space-y-6" action="#">
              <h5 class="mb-5 text-center text-[35px] font-medium text-gray-600">Login</h5>
              <div>
                  <label for="email" class="block mb-5 text-sm font-medium text-gray-600">Your email</label>
                  <input type="email" name="email" id="email" class="mb-5 bg-[#D9AE84] border border-yellow-900 text-[#736356] text-sm rounded-lg focus:border-[#D9AE84] block w-full p-2.5 placeholder-yellow-800" placeholder="pinnacle@bookstore.com" required>
              </div>
              <div>
                  <label for="password" class="block mb-5 text-sm font-medium text-gray-600">Your password</label>
                  <input type="password" name="password" id="password" placeholder="*****" class="mb-5 bg-[#D9AE84] border border-yellow-900 text-[#736356] text-sm rounded-lg focus:ring-[#D9AE84] focus:border-[#D9AE84] block w-full p-2.5 placeholder-yellow-800" required>
              </div>
              <div class="flex items-start">
                  <div class="flex items-start mb-5">
                      <div class="flex items-center h-5">
                          <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-[#736356] rounded bg-[#736356] focus:ring-white focus:ring-offset-white" required>
                      </div>
                      <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-600">Remember me</label>
                  </div>
                  <a href="#" class="ms-auto text-sm font-bold  hover:underline hover:text-blue-500 dark:text-black">Forgot Password?</a>
              </div>
              <button type="submit" class="mb-5 w-full text-white hover:text-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:bg-opacity-90 bg-[#736356]">Login to your account</button>
              <div class="text-sm font-medium text-gray-500 dark:text-gray-600 text-capasity-30 mb-5">
                  Not registered? <a href="/register" class="hover:underline hover:text-blue-500 dark:text-black">Create account</a>
              </div>
              <div class="flex flex-wrap items-center justify-center">
                <a class="px-32 text-center text-sm font-medium text-gray-600 mb-5">-Or Continue-</a>
                <button type="submit" class="flex items-center text-white hover:text-black bg-[#736356] hover:bg-[#EFDECE] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center focus:ring-[#736356]">
                    <img
                        src="img/google.png"
                        alt=""
                        class="w-5 h-5 rounded block object-cover align-middle"
                    > <span class="ml-3 text-md"> Login with google</span>
                </button>
              </div>
          </form>
      </div>

    </div>
  </body>
</html>
