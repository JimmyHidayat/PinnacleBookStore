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
          <form class="space-y-6" action="#">
              <h5 class="mb-5 text-center text-[35px] font-medium text-gray-600">Login</h5>
              <div>
                  <label for="email" class="block mb-5 text-sm font-medium text-gray-600">Your email</label>
                  <input type="email" name="email" id="email" class="mb-5 bg-[#D9AE84] border border-yellow-900 text-[#736356] text-sm rounded-lg focus:border-[#D9AE84] block w-full p-2.5 placeholder-yellow-800" placeholder="pinnacle@bookstore.com" required>
              </div>
              <div>
                  <label for="password" class="block mb-5 text-sm font-medium text-gray-600">Your password</label>
                  <input type="password" name="password" id="password" placeholder="" class="mb-5 bg-[#D9AE84] border border-yellow-900 text-[#736356] text-sm rounded-lg focus:ring-[#D9AE84] focus:border-[#D9AE84] block w-full p-2.5 placeholder-yellow-800" required>
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
